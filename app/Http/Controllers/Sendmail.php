<?php

namespace App\Http\Controllers;

use App\Mail\auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Resend;

class Sendmail extends Controller
{
    function mail() {
        $resend = Resend::client('re_43GzLCor_DhxJbcTCS68ZoYraXmDE6Ybi');
        
        $resend->emails->send([
            'from' => 'onboarding@resend.dev',
            'to' => 'brimomichel@gmail.com',
            'subject' => 'Hello World',
            'html' => '<p>Congrats on sending your <strong>first email</strong>!</p>'
          ]);  
    }
}
