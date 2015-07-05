<?php

class SubscriptionController extends BaseController {
    
    public function subscribe()
    {
        $rules = ['email'=>'required|email'];
        $validator = Validator::make(Input::all(), $rules);

        $contents = json_encode(['message'=>'Your subscription was unsuccessful.']);
        $response = Response::make($contents, 200);
        $response->header('Content-Type', 'text/json');

        if($validator->fails())
            return $response;
        $subscription = new Subscription;
        $subscription->email = Input::get('email');
        $subscription->active = 1;
        $subscription->save();
        $email = Input::get('email');

        #Shoot email to subscription service
        Mail::send('emails.subscription', array('email' => $email), function($message)
        {
            $message->to('newsletter@chenenetworks.com')->subject('Subscribe '.$email.' to Newsletter');
        });

        $contents = json_encode(['message'=>'Your subscription was successful.']);
        $response = Response::make($contents, 200);
        $response->header('Content-Type', 'text/json');
        return $response;

    }
}