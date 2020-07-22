<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HrOutsourcingSchedule extends Mailable
{
    use Queueable, SerializesModels;
   
    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $hraudit;
    public $organizationalanalysis;
    public $payrollservices;
    public $preemploymentservices;
    public $inductiononboarding;
    public $temporarypermanentstaffing;
    public $dedicatedhrprofessional;
    public $communications;
    public $legalcompliancerecordkeeping;
    public $healthsafetysecurity;
    public $customizedtraining;
    public $leadershiptraining;
    public $teambuilding;
    public $successionplanning;
    public $hr360ReviewFeedback;
    public $performancemanagement;
    public $retentionstrategies;
    public $workplaceinvestigations;
    public $coachingmentorship;
    public $benefitscompensation;
    public $help;
    public $companysize;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole
    ,$hraudit,$organizationalanalysis,$payrollservices,$preemploymentservices,
    $inductiononboarding,$temporarypermanentstaffing,$dedicatedhrprofessional,$communications,
    $legalcompliancerecordkeeping,$healthsafetysecurity,$customizedtraining,$leadershiptraining,
    $teambuilding,$successionplanning,$hr360ReviewFeedback,$performancemanagement,$retentionstrategies,
    $workplaceinvestigations,$coachingmentorship,$benefitscompensation,$help,$companysize)
    {
    
    $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->hraudit = $hraudit;
    $this->organizationalanalysis = $organizationalanalysis;
    $this->payrollservices = $payrollservices;
    $this->preemploymentservices = $preemploymentservices;
    $this->inductiononboarding = $inductiononboarding;
    $this->temporarypermanentstaffing = $temporarypermanentstaffing;
    $this->dedicatedhrprofessional = $dedicatedhrprofessional;
    $this->communications = $communications;
    $this->legalcompliancerecordkeeping = $legalcompliancerecordkeeping;
    $this->healthsafetysecurity = $healthsafetysecurity;
    $this->customizedtraining = $customizedtraining;
    $this->leadershiptraining = $leadershiptraining;
    $this->teambuilding = $teambuilding;
    $this->successionplanning = $successionplanning;
    $this->hr360ReviewFeedback = $hr360ReviewFeedback;
    $this->performancemanagement = $performancemanagement;
    $this->retentionstrategies = $retentionstrategies;
    $this->workplaceinvestigations = $workplaceinvestigations;
    $this->coachingmentorship = $coachingmentorship;
    $this->benefitscompensation = $benefitscompensation;
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
        return $this->subject("Request For Hr Outsourcing Services")->view('emails.hr-outsourcing-schedule');
    }
}
