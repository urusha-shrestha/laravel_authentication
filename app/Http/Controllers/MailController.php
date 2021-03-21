<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $data = ['name'=>"Zayn Malik",
                'verification_code'=>"abcdefg"
            ];
        Mail::to('urusha0404@gmail.com')->send(new sendEmail($data));
    }
}
