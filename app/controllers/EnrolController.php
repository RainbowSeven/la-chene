<?php

class EnrolController extends BaseController {

    # Display form to user to fill
    public function index(){
        return View::make('form.cita');
    }

    # Save form in db and shoot email that its okay
    public function save()
    {
      # Set rules for validation
       $rules = ['firstname'=>'required',
                'lastname'=>'required',  
                'email'=>'required|email', 
                'location'=>'required',
                'skills'=>'required',
                'programme'=>'required',
                'period'=>'required',
                'certificate'=>'required',
                'passport'=>'mimes:gif,jpg,jpeg,png,size:2000'];
        $validator = Validator::make(Input::all(), $rules);
        # Handle validation failure
        if($validator->fails() or !Input::hasFile('passport'))
            return View::make('error')->with(['message'=>'Please ensure to fulfil all requirements.']);
        
        # Proceed on valid form data
        $email = Input::get('email');
        
        # Upload passport photograph
        $filename = '';
        $dest_path = '';
        $extension = Input::file('passport')->getClientOriginalExtension();
        $size = Input::file('passport')->getSize();
        $dest_path = storage_path().'/passport/';
        $filename = $email.'.'.$extension;
        Input::file('passport')->move($dest_path, $filename);
            
        #Create new record or update existing one
        $student = Enrollment::firstOrCreate(['email'=> $email]);
        if(!empty($student->first_name)){
            $student = new Application;
            $student->email = $email;
        } 
       $student->first_name = Input::get('firstname');
       $student->last_name = Input::get('lastname'); 
       $student->email = Input::get('email'); 
       $student->phone = Input::get('phone'); 
       $student->programme = Input::get('programme'); 
       $student->period = Input::get('period'); 
       $student->certificate = Input::get('certificate'); 
       $student->location = Input::get('location'); 
       $student->skills = Input::get('skills'); 
       $student->passport = $dest_path.$filename; 
       $student->save(); 

       # Shoot email to chene academy
       Mail::send('emails.enrol', array(Input::all()), function($message)
        {
            $message->to('academy@chenenetworks.com')->subject('Enrolment for '.Input::get('programme').'-'.Input::get('fullname'));
        });

       return View::make('thank_you')->with(['person'=>'Trainers']);
    }

}
