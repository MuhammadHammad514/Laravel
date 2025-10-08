<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Students;
use App\Mail\WecomeEmail;
use Illuminate\Support\Facades\Mail;
class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to all users by running this command.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $studentsMails=Students::select('Email')->get();
        $email=[];
        foreach($studentsMails as $mails)
            {
                $email[]= $mails['Email'];
            }
        $msg = "Hi ,
        Welcome to our Student Portal! 🎉
        We are excited to have you join our learning community.";
        $subject = "Student Daily report";

        Mail::to("itxmadee8856@gmail.com")
            ->send(new WecomeEmail($msg, $subject));
            $this->info("Mail send successfully!");
       
    }
}
