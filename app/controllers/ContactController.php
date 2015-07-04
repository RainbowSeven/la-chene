<?php

class ContactController extends BaseController{
    # Show contact form
    public function show()
    {
        return View::make('form.contact');
    }

    # Save contact data
    public function save()
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'email' => 'required|email'
        ];
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
            return View::make('error')->with('message','Looks like there\'s some missing data');

        # Create new contact record
        $contact = new Contact;
        $contact->first_name = Input::get('firstname');
        $contact->last_name = Input::get('lastname');
        $contact->phone = Input::get('phone');
        $contact->email = Input::get('email');
        $contact->message = Input::get('message');
        $contact->save();

        # Shoot email to customer service team
        Mail::send('emails.contact', array(Input::all()), function($message)
        {
            $message->to('info@chenenetworks.com')->subject($email.' is requesting some information');
        });
        
        return View::make('thank_you')->with(['person'=>'Customer care agents']);
    }
}