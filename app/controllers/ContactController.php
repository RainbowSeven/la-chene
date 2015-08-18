<?php

class ContactController extends BaseController
{
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
            'email' => 'required|email',
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return View::make('error')->with('message', 'Looks like there\'s some missing data');
        }

        # Create new contact record
        $contact = new Contact;
        $contact->first_name = Input::get('firstname');
        $contact->last_name = Input::get('lastname');
        $contact->phone = Input::get('phone');
        $contact->email = Input::get('email');
        $contact->message = Input::get('message');
        $contact->save();

        # Shoot email to customer service team
        $em = Input::get('email');
        Mail::send('emails.contact', Input::all(), function ($message) use ($em) {
            $message->to('info@chenenetworks.com')->subject($em . ' is requesting some information');
        });

        return View::make('thank_you')->with(['person' => 'Customer care agents']);
    }

    public function get()
    {
        $x = Contact::orderBy('created_at', 'desc')->get();
        $data['res'] = $x;
        $data['res_type'] = 'contact messages';
        return View::make('admin.result.master.message', $data);
    }

    public function reply()
    {
        $data = ['body' => Input::get('message')];
        $email = Input::get('email');
        Mail::send('emails.auth.contact', $data, function ($message) use ($email) {
            $message->from('info@chenenetworks.com', 'Chêne Networks');
            $message->to($email);
            $message->subject(Input::get('subject', 'Feedback from Chêne Networks'));
        });
        return "Done";
    }

}
