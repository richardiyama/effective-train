<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css" rel="stylesheet" media="all">
/* Media Queries */
@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>
</head>
<?php
$style = [
/* Layout ------------------------------ */
'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;',
'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;',
/* Masthead ----------------------- */
'email-masthead' => 'padding: 25px 0; text-align: center;',
'email-masthead_name' => 'font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',
'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
'email-body_inner' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0;',
'email-body_cell' => 'padding: 35px;',
'email-footer' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;',
'email-footer_cell' => 'color: #AEAEAE; padding: 35px; text-align: center;',
/* Body ------------------------------ */
'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',
/* Type ------------------------------ */
'anchor' => 'color: #3869D4;',
'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;',
'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;',
'paragraph-sub' => 'margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
'paragraph-center' => 'text-align: center;',
/* Buttons ------------------------------ */
'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',
'button--green' => 'background-color: #22BC66;',
'button--red' => 'background-color: #dc4d2f;',
'button--blue' => 'background-color: #3869D4;',
];
?>
<?php $fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;'; ?>
<body style="{{ $style['body'] }}">


<!-- Logo -->

<p style="{{ $style['email-masthead'] }}"><a style="{{ $fontFamily }} {{ $style['email-masthead_name'] }}" href="{{ url('/') }}" target="_blank"> <img src="http://eaz-roc.ng/images/header/logo.jpg" height="150px"></p>
<!--{{ config('app.name') }}-->
</a><br/><br/><div align="center"><h3>Consulting Advisory Schedule From: {{$fullname}}</h3></div>

<!-- Email Body -->

<p style="{{ $style['email-body'] }}" width="100%"><table style="{{ $style['body_action'] }}" align="center" width="100%" cellpadding="0" cellspacing="0"></p>

<p align="center"> Work Email: {{$workemail}} </p>
<p align="center"> Mobile Number: {{$phone}} </p>
<p align="center"> Organisation: {{$organisation}} </p>
<p align="center"> Job Role: {{$jobrole}} </p>
</a><br/><br/><div align="center"><h3>What Consulting Advisory Services are you interested in?</h3></div>
<p align="center"> Retreat: {{$retreat}} </p>
<p align="center"> MPR: {{$mpr}} </p>
<p align="center"> Business Plan: {{$businessplan}} </p>
<p align="center"> Virtual Talent Hub: {{$virtualtalenthub}} </p>
<p align="center"> Benchmarking: {{$benchmarking}} </p>
<p align="center"> Digital Marketing: {{$digitalmarketing}} </p>
<p align="center"> Strategic Management: {{$strategicmanagement}} </p>
<p align="center"> Leadership Softskills: {{$leadershipsoftskills}} </p>
<p align="center"> Customer Service: {{$customerservice}} </p>
<p align="center"> Accounting Finance Banking: {{$accountingfinancebanking}} </p>
<p align="center"> Operations Project Management: {{$operationsprojectmanagement}} </p>
<p align="center"> Hr Management Team Bonding: {{$hrmanagementteambonding}} </p>
<p align="center"> Benefits Compensation Survey: {{$benefitscompensationsurvey}} </p>
<p align="center"> Hr Audit: {{$hraudit}} </p>
<p align="center"> Iso Audit: {{$isoaudit}} </p>
<p align="center"> Facility Audit: {{$facilityaudit}} </p>
<p align="center"> Financial Audit: {{$financialaudit}} </p>
<p align="center"> Creative Alternative Benefits: {{$creativealternativebenefits}} </p>
<p align="center"> Local International: {{$localinternational}} </p>
<p align="center"> Eductional Credential Verification: {{$eductionalcredentialverification}} </p>
<p align="center"> Professional Certification Verification: {{$professionalcertificationverification}} </p>
<p align="center"> Guarantor Verification: {{$guarantorverification}} </p>
<p align="center"> KYC Residence Verification: {{$kycresidenceverification}} </p>
<p align="center"> Previous Employer Personal: {{$previousemployerpersonal}} </p>
</a><br/><br/><div align="center"><h3>How else can we be of help?</h3></div>
<p align="center"> {{$help}} </p>
<p align="center"> Company Size: {{$companysize}} </p>



<!-- Footer -->

<table style="{{ $style['email-footer'] }}" align="center" width="570" cellpadding="0" cellspacing="0">
<tr>
<td style="{{ $fontFamily }} {{ $style['email-footer_cell'] }}"><p style="{{ $style['paragraph-sub'] }}"> &copy; {{ date('Y') }} <a style="{{ $style['anchor'] }}" href="{{ url('/') }}" target="_blank">Global Outsourcing Service Limited</a>.
All rights reserved. </p></td>
</tr>
</table>

</body>
</html>
