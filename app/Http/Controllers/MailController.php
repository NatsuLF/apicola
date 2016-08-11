<?php

namespace App\Http\Controllers;

use Mail;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'required|email',
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back();
        }

        $data = ['name' => $request->name, 'mail' => $request->mail, 'body' => $request->body];

        Mail::send('email.contact', $data, function($message) use ($data)
        {
            $message->from($data['mail'], $data['name']);
            $message->to('leodota7@gmail.com')->subject('Contact email');
        });

        return view('greeting');
    }
}