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
                'service-category' => 'required',
                'service-detail'   => 'required'
            ];

        $validator = Validation::make(Input::all(), $rules);

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
        Mail::send('emails.marketing', array(Input::all()), function($message)
        {
            $message->to('marketing@chenenetworks.com')->subject($email.' is requesting a quote');
        });
	}

	
}
