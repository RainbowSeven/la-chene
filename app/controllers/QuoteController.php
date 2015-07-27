<?php

class QuoteController extends BaseController {

	public function index()
	{
		return View::make('form.quote');
	}

	# Save quote form
	public function save()
	{
        # Set validation rules
        $rules = [
                'firstname'        => 'required',
                'lastname'         => 'required',
                'email'            => 'required',
                'phone'            => 'required',
                'location'         => 'required',
                'service_category' => 'required',
                'service_detail'   => 'required'
            ];

        $validator = Validator::make(Input::all(), $rules);

        # Handle invalid data
        if($validator->fails())
            return View::make('error')->with('message','Looks like there\'s some missing data');

        $quote = new Quote;
        $quote->firstname = Input::get('firstname');
        $quote->lastname = Input::get('lastname');
        $quote->email = Input::get('email');
        $quote->phone = Input::get('phone');
        $quote->location = Input::get('location');
        $quote->service_category = Input::get('service_category');
        $quote->service_detail = Input::get('service_detail');

        $quote->save();

        # Shoot email to marketing team
        Mail::send('emails.marketing', Input::all(), function($message)
        {
            $message->to('marketing@chenenetworks.com')->subject(Input::get('email').' is requesting a quote');
        });

        return View::make('thank_you')->with(['person'=>'experienced personnel']);
	}

    public function get() {
        $x = Quote::all();
        $data['res'] = $x;
        $data['res_type'] = 'quote';
        return View::make('admin.result.master.quote', $data);
    }	

    public function reply() {
        $data = ['body'=>Input::get('message')];
        Mail::send('emails.auth.contact', $data, function($message)
        {
            $message->from('marketing@chenenetworks.com', 'Chêne Networks');
            $message->to(Input::get('email'));
            $message->subject(Input::get('subject', 'Feedback from Chêne Networks'));
        });
        return "Done";
    }
}
