<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contactEmail(Request $request){


        if (!empty($request->email) ) {


            //send verification mail to user
            $_username = 'Dear sir';
            $_email_user = 'standardtechnologypk@gmail.com';
            $_title_site = "standard technology USA";
            $_email_noreply = "no-reply@standardtechnologyusa.com";

            Mail::send('emails.contact_us_page',
                [
                    'name' => $request->name ,
                    'subject' =>$request->subject,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'message'=>$request->message,
            ],
                function ($message) use (
                    $_username,
                    $_email_user,
                    $_title_site,
                    $_email_noreply
                ) {
                    $message->from($_email_noreply, $_title_site);
                    $message->subject(trans('Contact Message From Site'));
                    $message->to($_email_user, $_username);
                });
            return ["error" => false, 'message' => 'Email Sent Successfully!'];
    }
}
}
