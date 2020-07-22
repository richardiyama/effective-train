<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultingSchedule extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $retreat;
    public $mpr;
    public $businessplan;
    public $virtualtalenthub;
    public $benchmarking;
    public $digitalmarketing;
    public $strategicmanagement;
    public $leadershipsoftskills;
    public $customerservice;
    public $accountingfinancebanking;
    public $operationsprojectmanagement;
    public $hrmanagementteambonding;
    public $benefitscompensationsurvey;
    public $hraudit;
    public $isoaudit;
    public $facilityaudit;
    public $financialaudit;
    public $creativealternativebenefits;
    public $localinternational;
    public $eductionalcredentialverification;
    public $professionalcertificationverification;
    public $guarantorverification;
    public $kycresidenceverification;
    public $previousemployerpersonal;
    public $help;
    public $companysize;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole
    ,$retreat,$mpr,$businessplan,$virtualtalenthub,$benchmarking,$digitalmarketing,
    $strategicmanagement,$leadershipsoftskills,$customerservice,$accountingfinancebanking,
    $operationsprojectmanagement,$hrmanagementteambonding,$benefitscompensationsurvey,
    $hraudit,$isoaudit,$facilityaudit,$financialaudit,$creativealternativebenefits,
    $localinternational,$eductionalcredentialverification,$professionalcertificationverification,
    $guarantorverification,$kycresidenceverification,$previousemployerpersonal,$help,$companysize)
    {
    
    $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->retreat = $retreat;
    $this->mpr = $mpr;
    $this->businessplan = $businessplan;
    $this->virtualtalenthub = $virtualtalenthub;
    $this->benchmarking = $benchmarking;
    $this->digitalmarketing = $digitalmarketing;
    $this->strategicmanagement = $strategicmanagement;
    $this->leadershipsoftskills = $leadershipsoftskills;
    $this->customerservice = $customerservice;
    $this->accountingfinancebanking = $accountingfinancebanking;
    $this->operationsprojectmanagement = $operationsprojectmanagement;
    $this->hrmanagementteambonding = $hrmanagementteambonding;
    $this->benefitscompensationsurvey = $benefitscompensationsurvey;
    $this->hraudit = $hraudit;
    $this->isoaudit = $isoaudit;
    $this->facilityaudit = $facilityaudit;
    $this->financialaudit = $financialaudit;
    $this->creativealternativebenefits = $creativealternativebenefits;
    $this->localinternational = $localinternational;
    $this->eductionalcredentialverification = $eductionalcredentialverification;
    $this->professionalcertificationverification = $professionalcertificationverification;
    $this->guarantorverification = $guarantorverification;
    $this->kycresidenceverification = $kycresidenceverification;
    $this->previousemployerpersonal = $previousemployerpersonal;
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
        return $this->subject("Request For Consulting Advisory Services")->view('emails.consulting-advisory-schedule');
    }
}
