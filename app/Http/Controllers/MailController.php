<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $message = $request->all();
        Mail::to('reynard.starlee@gmail.com')->send(new sendMail($message));

        return 'mail has been sent succesfully';
    }
}
