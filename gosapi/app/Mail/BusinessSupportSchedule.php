<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BusinessSupportSchedule extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $softwaredevelopmentdatamanagement;
    public $procurementsupplies;
    public $hrpartner;
    public $emergencyresponse;
    public $digitilizationofcrimedatabase;
    public $capitalitemconsumables;
    public $printingstationery;
    public $subcontractorprequalification;
    public $contractorperformanceevaluation;
    public $auditpayroll;
    public $insurancehmohealthcarebenefits;
    public $companysecretariatleal;
    public $businessplan;
    public $businesssuportplatform;
    public $help;
    public $companysize;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole
    ,$softwaredevelopmentdatamanagement,$procurementsupplies,$hrpartner,
    $emergencyresponse,$digitilizationofcrimedatabase,$capitalitemconsumables,
    $printingstationery,$subcontractorprequalification,$contractorperformanceevaluation,
    $auditpayroll,$insurancehmohealthcarebenefits,$companysecretariatleal,$businessplan,
    $businesssuportplatform,$help,$companysize)
    {
    
    $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->softwaredevelopmentdatamanagement =$softwaredevelopmentdatamanagement;
    $this->procurementsupplies = $procurementsupplies;
    $this->hrpartner = $hrpartner;
    $this->emergencyresponse = $emergencyresponse;
    $this->capitalitemconsumables = $capitalitemconsumables;
    $this->printingstationery = $printingstationery;
    $this->digitilizationofcrimedatabase = $digitilizationofcrimedatabase;
    $this->subcontractorprequalification = $subcontractorprequalification;
    $this->contractorperformanceevaluation = $contractorperformanceevaluation;
    $this->auditpayroll = $auditpayroll;
    $this->insurancehmohealthcarebenefits = $insurancehmohealthcarebenefits;
    $this->companysecretariatleal = $companysecretariatleal;
    $this->businessplan = $businessplan;
    $this->businesssuportplatform = $businesssuportplatform;
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
        return $this->subject("Request For Business Support Services")->view('emails.business-support-schedule');
    }
}
