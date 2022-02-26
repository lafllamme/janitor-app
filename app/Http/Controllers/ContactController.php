<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserNotification;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        try {
            $validated = $request->validate([
                'name' => 'bail|required',
                'email' => 'bail| email| required',
                'service' => 'bail|required',
                'description' => 'bail|required|max:255'
            ]);

            if ($request->phonenumber) {
                $validated['phonenumber'] = $request->phonenumber;
            }
            Mail::to('teke900@gmail.com')->send(new NewUserNotification($validated));

            // dd("Email is Sent.");
            $success = 'Wir melden uns so schnell es geht! Danke für Ihr Vertrauen 👍🏻 ';
            return redirect()->to(url()->previous() . '#contact')->with('success', $success);
        } catch (Exception $e) {
            // dd($e);
            $e = 'Deine Angaben waren entweder unvollständig oder inkorrekt 😥 ';
            return redirect()->to(url()->previous() . '#contact')->with('error', $e);
        }






        // return redirect('/')->withErrors($validator, 'login');

    }
}
