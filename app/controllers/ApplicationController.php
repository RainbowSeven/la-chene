<?php

class ApplicationController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
     */
    #'hr' => 'hr@chenenetworks.com',

    public function index()
    {
        return View::make('find-a-job');
    }
    public function save()
    {
        $rules = ['fullname' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'message' => 'required',
            'cv' => 'mimes:doc,docx,pdf,size:2000'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return View::make('error')->with(['message' => 'Please ensure to fulfil all requirements.', 'breadcrumb' => 'find-job']);
        }

        $email = Input::get('email');
        $filename = '';
        $dest_path = '';
        if (Input::hasFile('cv')) {
            $extension = Input::file('cv')->getClientOriginalExtension();
            $size = Input::file('cv')->getSize();
            $dest_path = storage_path() . '/cv/';
            $filename = $email . '.' . $extension;
            Input::file('cv')->move($dest_path, $filename);

        }
        $applicant = Application::firstOrCreate(['email' => $email]);
        if (!empty($applicant->fullname)) {
            $applicant = new Application;
            $applicant->email = $email;
        }
        $applicant->fullname = Input::get('fullname');
        $applicant->position = Input::get('position');
        $applicant->message = Input::get('message');
        $applicant->cv = $dest_path . $filename;
        $applicant->save();
        $position = Input::get('position');
        $fullname = Input::get('fullname');
        Mail::send('emails.application', array(Input::all()), function ($message) use ($position, $fullname) {
            $message->to('hr@chenenetworks.com')->subject('Application for ' . $position . ' - ' . $fullname);
        });
        return View::make('thank_you')->with(['person' => 'HR agents', 'breadcrumb' => 'team']);
    }

    public function get()
    {
        $x = Application::orderBy('created_at', 'desc')->get();
        $data['res'] = $x;
        return View::make('admin.result.master.application', $data);
    }

    public function reply()
    {
        $data = ['body' => Input::get('message')];
        Mail::send('emails.auth.contact', $data, function ($message) {
            $message->from('hr@chenenetworks.com', 'Chêne Networks');
            $message->to(Input::get('email'));
            $message->subject(Input::get('subject', 'Feedback from Chêne Networks'));
        });
        return "Done";
    }
}
