<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
     /**
     * Ship the given order.
     */
    public function envoimail()
    {
        
        Mail::to('receiver@test.com')->send(new TestMail());
 
        return view('mytest');
    }
}
