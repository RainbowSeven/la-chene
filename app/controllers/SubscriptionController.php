<?php

class SubscriptionController extends BaseController
{

    public function subscribe()
    {
        $rules = ['email' => 'required|email'];
        $validator = Validator::make(Input::all(), $rules);

        $contents = json_encode(['message' => 'Your subscription was unsuccessful.']);
        $failure = Response::make($contents, 200);
        $failure->header('Content-Type', 'text/json');

        if ($validator->fails()) {
            return $failure;
        }

        $subscription = new Subscription;
        $subscription->email = Input::get('email');
        $subscription->active = 1;
        $subscription->save();
        $email = Input::get('email');
        $subject = "Subscribe {$email} to Newsletter";
        #Shoot email to subscription service
        Mail::send('emails.subscription', array('email' => $email), function ($message) use subject {
            $message->to('newsletter@chenenetworks.com')->subject($subject);
        });

        $contents = json_encode(['message' => 'Your subscription was successful.']);
        $success = Response::make($contents, 200);
        $success->header('Content-Type', 'text/json');
        return $success;

    }

    public function get()
    {
        $x = Subscription::orderBy('created_at', 'desc')->get();
        $data['res'] = $x;
        $data['res_type'] = 'contact messages';
        return View::make('admin.result.master.subscriber', $data);
    }

    public function reply()
    {
        $data['body'] = Input::get('message');
        Mail::queue('emails.auth.contact', $data, function ($message) {
            $subscribers = Subscription::lists('email');
            foreach ($subscribers as $subscriber) {
                $message->to($subscriber);
                $message->subject(Input::get('subject', 'Newsletter | Chêne Networks'));
                $message->from('newsletter@chenenetworks.com');
            }
        });
        return "Done";
    }

}
