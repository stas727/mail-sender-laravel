<?php

namespace App\Http\Controllers;

use App\Console\Commands\SendEmail;
use App\Mail\sender;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Queue;

class mail_controller extends Controller
{
   public function index()
   {
      $this->send();
   }

   public function send()
   {
      Queue::pushOn('stasmail727@gmail.com',new SendEmail());
   }
}
