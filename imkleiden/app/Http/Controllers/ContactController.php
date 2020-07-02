<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'

        ]);

        $message = new Contact;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->bericht = $request->input('bericht');
        $message->save();

        return redirect('/')->with('success', 'Message Sent');
    }

}
