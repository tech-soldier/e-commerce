<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class SendMailController extends Controller
{
    /**
     * Send email to support/website
     * @return  email
     */
    public function sendEmailToUser() 
    {
        $to_email = "techwatch7@gmail.com";

        Mail::to($to_email)->send(new SendEmail);

        return "<p> Your E-mail has been sent succssfully. </p>";
    }

    /**
     * Send email to site owner
     * @param Request $request 
     */
    public function Email(Request $request)
    {
        // Requred for email headers
        $to_email = 'techwatch7@gmail.com';
        $to_name = 'Laravel Site Owner';

        // submitted by contact form
        $user_email = $request->input('user_email');
        $user_subject = $request->input('user_subject');
        $user_name = $request->input('user_name');
        $user_message = $request->input('user_message');

        // user message gets compacted and sent to the view emails.contact
        Mail::send('emails.contact', compact('user_message', 'user_email'), 
            function($message) use ($to_email, $to_name, $user_email, $user_name, $user_subject) {

                    $message->to($to_email, $to_name)->subject($user_subject);
                    $message->from($user_email, $user_name);

                });
                return redirect('/')->with('success', 'Your Email has been sent successfully!');;
                die;
    }

}