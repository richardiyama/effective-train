<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LearningSchedule extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $mangementleadership;
    public $exceptionalcustomerservice;
    public $performancemanagement;
    public $basicstressmanagement;
    public $personaleffectiviness;
    public $reportwritting;
    public $teambuilding;
    public $presentationskillsformanagers;
    public $effectivedelegationformanagers;
    public $help;
    public $companysize;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole
    ,$mangementleadership,$exceptionalcustomerservice,$performancemanagement,
    $basicstressmanagement,$personaleffectiviness,$reportwritting,
    $teambuilding,$presentationskillsformanagers,$effectivedelegationformanagers,$help,$companysize)
    {
    
    $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->mangementleadership = $mangementleadership;
    $this->exceptionalcustomerservice = $exceptionalcustomerservice;
    $this->performancemanagement = $performancemanagement;
    $this->basicstressmanagement = $basicstressmanagement;
    $this->personaleffectiviness = $personaleffectiviness;
    $this->reportwritting = $reportwritting;
    $this->teambuilding = $teambuilding;
    $this->presentationskillsformanagers = $presentationskillsformanagers;
    $this->effectivedelegationformanagers = $effectivedelegationformanagers;
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
        return $this->subject("Request For Learning And Development Services")->view('emails.learning-schedule');
    }
}
