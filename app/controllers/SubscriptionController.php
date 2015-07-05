<?php

class SubscriptionController extends BaseController {
    
    public function subscribe()
    {
        $rules = ['email'=>'required|email'];
        $validator = Validator::make(Input::all(), $rules);

        $contents = json_encode(['message'=>'Your subscription was unsuccessful.']);
        $failure = Response::make($contents, 200);
        $failure->header('Content-Type', 'text/json');

        if($validator->fails())
            return $failure;
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
        $success = Response::make($contents, 200);
        $success->header('Content-Type', 'text/json');
        return $success;

    }
}