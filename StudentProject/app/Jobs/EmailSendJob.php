<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Students;
use Illuminate\Support\Facades\Mail;
use App\Mail\WecomeEmail;
class EmailSendJob implements ShouldQueue
{
    use Queueable;
    public $registerStudent;
    /**
     * Create a new job instance.
     */
    public function __construct($registerStd)
    {
        $this->registerStudent=$registerStd;
       }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $name = $this->registerStudent->First_Name;
        $msg = "Hi {$name},
        Welcome to our Student Portal! 🎉
        We are excited to have you join our learning community.";
        $subject = "Welcome to Our Student Portal! 🎓";

        Mail::to($this->registerStudent->Email)
            ->send(new WecomeEmail($msg, $subject));
         
    }
}
