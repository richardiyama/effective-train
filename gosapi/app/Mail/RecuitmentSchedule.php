<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecuitmentSchedule extends Mailable
{
    use Queueable, SerializesModels;

   
    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $help;
    public $companysize;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole,$help,$companysize)
    {
        $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->help = $help;
    $this->companysize = $companysize;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Request For Recruitment Assessment Services")->view('emails.recruitment-schedule');
    }
}
