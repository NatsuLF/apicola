<?php
namespace App\Http\Controllers;

use App;
use Mail;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

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

        $addressee = App::environment('local') ? 'mario.martinez@ucc.edu.ni' : 'martin.cisneros@ucc.edu.ni';
        $data = [
            'name' => $request->name,
            'mail' => $request->mail,
            'body' => $request->body,
            'addressee' => $addressee
        ];

        Mail::send('email.contact', $data, function($message) use ($data)
        {
            $message->from($data['mail'], $data['name']);
            $message->to($data['addressee'])->subject('Contact email');
        });

        return view('greeting');
    }
}