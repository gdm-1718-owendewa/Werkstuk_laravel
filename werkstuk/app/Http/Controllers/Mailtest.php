<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Milestone1;

class Mailtest extends Controller
{
    //
    public function Send(){
        $mailClass = new Milestone1();
        Mail::to('owendewa@student.arteveldehs.be')->send($mailClass); 
    }
}