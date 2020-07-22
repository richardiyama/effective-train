<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FacilityManagementSchedule extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $workemail;
    public $phone;
    public $organisation;
    public $jobrole;
    public $poweraudit;
    public $testingcommissioning;
    public $assetregistercoding;
    public $spaceoccupancy;
    public $buildingmaintainance;
    public $groundsmaintainance;
    public $environmentmanagement;
    public $facilitycivilengineering;
    public $cleaning;
    public $concierge;
    public $welfareFacilities;
    public $laboursupply;
    public $facilityphysicalguard;
    public $surveillancecctv;
    public $technicalinstallation;
    public $emergencymanagement;
    public $help;
    public $companysize;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname,$workemail,$phone,$organisation,$jobrole,$poweraudit,
    $testingcommissioning,$assetregistercoding,$spaceoccupancy,$buildingmaintainance,$groundsmaintainance,
    $environmentmanagement,$facilitycivilengineering,$cleaning,$concierge,$welfareFacilities,$laboursupply,
    $facilityphysicalguard,$surveillancecctv,$technicalinstallation,$emergencymanagement,$help,$companysize)
    {
        $this->fullname = $fullname;
    $this->workemail = $workemail;
    $this->phone = $phone;
    $this->organisation = $organisation;
    $this->jobrole = $jobrole;
    $this->poweraudit = $poweraudit;
    $this->testingcommissioning = $testingcommissioning;
    $this->assetregistercoding = $assetregistercoding;
    $this->spaceoccupancy = $spaceoccupancy;
    $this->buildingmaintainance = $buildingmaintainance;
    $this->groundsmaintainance = $groundsmaintainance;
    $this->environmentmanagement = $environmentmanagement;
    $this->facilitycivilengineering = $facilitycivilengineering;
    $this->cleaning = $cleaning;
    $this->concierge = $concierge;
    $this->welfareFacilities = $welfareFacilities;
    $this->laboursupply = $laboursupply;
    $this->facilityphysicalguard = $facilityphysicalguard;
    $this->surveillancecctv = $surveillancecctv;
    $this->technicalinstallation = $technicalinstallation;
    $this->emergencymanagement = $emergencymanagement;
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
        return $this->subject("Request For Facility Management Services")->view('emails.facility-management-schedule');
    }
}
