<?php

namespace App\Console\Commands;

use App\Mail\sender;
use Illuminate\Console\Command;
use Mail;

class SendEmail extends Command
{
   /**
    * The name and signature of the console command.
    *
    * @var string
    */
   protected $signature = 'send:email';

   /**
    * The console command description.
    *
    * @var string
    */
   protected $description = 'Sended email';

   /**
    * Create a new command instance.
    *
    * @return void
    */
   public function __construct()
   {
      parent::__construct();
   }

   /**
    * Execute the console command.
    *
    * @return mixed
    */
   public function handle()
   {
      $this->send();
   }

   public function send()
   {
      $sender = new sender();
      $sender->page = 'mail.templateMail';
      $sender->subject = 'subject';
      Mail::to('stasmail727@gmail.com')->later((int)1, $sender);
   }

}
