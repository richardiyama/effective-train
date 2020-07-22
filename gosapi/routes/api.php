<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('contacts', 'ContactMessageController@store');
Route::post('freelance', 'FreelanceScheduleController@store');
Route::post('recruitment', 'RecuitmentScheduleController@store');
Route::post('learning', 'LearningScheduleController@store');
Route::post('hr', 'HrOutsourcingScheduleController@store');
Route::post('logistics', 'BusinessLogisticsScheduleController@store');
Route::post('checks', 'BackgroundCheckScheduleController@store');
Route::post('supports', 'BusinessSupportScheduleController@store');
Route::post('consults', 'ConsultingScheduleController@store');
Route::post('emergency', 'EmergencyResponseScheduleController@store');
Route::post('facilities', 'FacilityManagementScheduleController@store');
Route::get('abouts','Api\AboutApiController@index');
Route::get('accordions','Api\AccordionApiController@index');
Route::get('posts','Api\PostApiController@index');
Route::get('servicedetailss','Api\ServiceDetailsApiController@index');
Route::get('servicedones','Api\ServiceDoneApiController@index');
Route::get('brands','Api\BrandApiController@index');
Route::get('coursefiles','Api\CourseFileApiController@index');
Route::get('counterups','Api\CounterUpApiController@index');
Route::get('columnstwos','Api\ColumnsTwoApiController@index');
Route::get('columnstwos/{id}','Api\ColumnsTwoApiController@show');
Route::get('contactuss','Api\ContactUsApiController@index');
Route::get('footers','Api\FooterApiController@index');
Route::get('headers','Api\HeaderApiController@index');
Route::get('originalservices','Api\OriginalServiceApiController@index');
Route::get('originalservices/{id}','Api\OriginalServiceApiController@show');
Route::get('standardservices','Api\StandardServiceApiController@index');
Route::get('standardservices/{id}','Api\StandardServiceApiController@show');
Route::get('homes','Api\HomeApiController@index');
Route::get('sliders','Api\SliderApiController@index');
Route::get('abouttwos','Api\AboutTwoApiController@index');
Route::get('teams','Api\TeamApiController@index');
Route::get('teamareas','Api\TeamAreaApiController@index');
Route::get('nameitems','Api\NameItemApiController@index');
Route::get('socials','Api\SocilaApiController@index');
Route::get('findinguss','Api\FindingUsApiController@index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
