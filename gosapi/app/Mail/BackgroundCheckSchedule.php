<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BackgroundCheckSchedule extends Mailable
{
    use Queueable, SerializesModels;
    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $safeguard;
    public $identityverification;
    public $addressverification;
    public $guarantorverification;
    public $employmentverification;
    public $help;
    public $companysize;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole,
    $safeguard,$identityverification,$addressverification,$guarantorverification,
    $employmentverification,$help,$companysize)
    {
    
    $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->safeguard = $safeguard;
    $this->identityverification = $identityverification;
    $this->addressverification = $addressverification;
    $this->guarantorverification = $guarantorverification;
    $this->employmentverification = $employmentverification;
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
        return $this->subject("Request For Background Check Services")->view('emails.background-check-schedule');
    }
}
