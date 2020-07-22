<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BusinessLogisticsSchedule extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $fleetmanagement;
    public $fleetmaintainance;
    public $protocoltravelticketing;
    public $warehousing;
    public $officemoves;
    public $help;
    public $companysize;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole
    ,$fleetmanagement,$fleetmaintainance,$protocoltravelticketing,
    $warehousing,$officemoves,$help,$companysize)
    {
    
    $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->fleetmanagement = $fleetmanagement;
    $this->fleetmaintainance = $fleetmaintainance;
    $this->protocoltravelticketing = $protocoltravelticketing;
    $this->warehousing = $warehousing;
    $this->officemoves = $officemoves;
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
        return $this->subject("Request For Business Logistics Services")->view('emails.business-logistics-schedule');
    }
}
