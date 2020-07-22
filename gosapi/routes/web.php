<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth'])->group(function(){
    Route::get('abouts','AboutController@index');
    //Route::get('abouts','AboutController@edit');
    Route::get('abouts/{id}','AboutController@show')->name('abouts.show');
    Route::post('abouts','AboutController@update')->name('abouts.update');


    Route::get('aboutcounterareas','AboutCounterAreaController@index');
    Route::get('aboutcounterareas/{id}','AboutCounterAreaController@show')->name('aboutcounterareas.show');
    Route::post('aboutcounterareas','AboutCounterAreaController@update')->name('aboutcounterareas.update');


    Route::get('aboutones','AboutOneController@index');
    Route::get('aboutones/{id}','AboutOneController@show')->name('aboutones.show');
    Route::post('aboutones','AboutOneController@update')->name('aboutones.update');


    Route::get('abouttwos','AboutTwoController@index');
    Route::get('abouttwos/{id}','AboutTwoController@show')->name('abouttwos.show');
    Route::post('abouttwos','AboutTwoController@update')->name('abouttwos.update');

    Route::get('accordions','AccordionController@index');
    Route::get('accordions/{id}','AccordionController@show')->name('accordions.show');
    Route::post('accordions','AccordionController@update')->name('accordions.update');

    Route::get('blogareas','BlogAreaController@index')->name('blogarea.blogareas');
    Route::get('blogareas/create','BlogAreaController@create')->name('blogareas.create');
    Route::post('blogareas/create','BlogAreaController@store')->name('blogareas.store');
    Route::get('blogareas/{id}','BlogAreaController@show')->name('blogareas.show');
    Route::post('blogareas/{id}','BlogAreaController@destroy')->name('blogareas.destroy');
    Route::post('blogareas','BlogAreaController@update')->name('blogareas.update');


    Route::get('brands','BrandController@index');
    Route::get('brands/create','BrandController@create')->name('brands.create');
    Route::post('brands/create','BrandController@store')->name('brands.store');
    Route::get('brands/{id}','BrandController@show')->name('brands.show');
    Route::post('brands/{id}','BrandController@destroy')->name('brands.destroy');
    Route::post('brands','BrandController@update')->name('brands.update');


    Route::get('coursefiles','CourseFileController@index');
    Route::get('coursefiles/create','CourseFileController@create')->name('coursefiles.create');
    Route::post('coursefiles/create','CourseFileController@store')->name('coursefiles.store');
    Route::get('coursefiles/{id}','CourseFileController@show')->name('coursefiles.show');
    Route::post('coursefiles/{id}','CourseFileController@destroy')->name('coursefiles.destroy');
    Route::post('coursefiles','CourseFileController@update')->name('coursefiles.update');

    Route::get('breadcrumbareas','BreadCrumbAreaController@index');
    Route::get('breadcrumbareas/{id}','BreadCrumbAreaController@show')->name('breadcrumbareas.show');
    Route::post('breadcrumbareas','BreadCrumbAreaController@update')->name('breadcrumbareas.update');


    Route::get('breadcrumps','BreadCrumpController@index');
    Route::get('breadcrumps/{id}','BreadCrumpController@show')->name('breadcrumps.show');
    Route::post('breadcrumps','BreadCrumpController@update')->name('breadcrumps.update');


    Route::get('columnsthrees','ColumnsThreeController@index');
    Route::get('columnsthrees/{id}','ColumnsThreeController@show')->name('columnsthrees.show');
    Route::post('columnsthrees','ColumnsThreeController@update')->name('columnsthrees.update');


    Route::get('columnstwos','ColumnsTwoController@index');
    Route::get('columnstwos/{id}','ColumnsTwoController@show')->name('columnstwos.show');
    Route::post('columnstwos','ColumnsTwoController@update')->name('columnstwos.update');


    Route::get('contacttopareas','ContactTopAreaController@index');
    Route::get('contacttopareas/{id}','ContactTopAreaController@show')->name('contacttopareas.show');
    Route::post('contacttopareas','ContactTopAreaController@update')->name('contacttopareas.update');

    Route::get('contactuss','ContactUsController@index');
    Route::get('contactuss/{id}','ContactUsController@show')->name('contactuss.show');
    Route::post('contactuss','ContactUsController@update')->name('contactuss.update');

    Route::get('counterareas','CounterAreaController@index');
    Route::get('counterareas/{id}','CounterAreaController@show')->name('counterareas.show');
    Route::post('counterareas','CounterAreaController@update')->name('counterareas.update');


    Route::get('counterups','CounterUpController@index');
    Route::get('counterups/{id}','CounterUpController@show')->name('counterups.show');
    Route::post('counterups','CounterUpController@update')->name('counterups.update');


    Route::get('findinguss','FindingUsController@index');
    Route::get('findinguss/{id}','FindingUsController@show')->name('findinguss.show');
    Route::post('findinguss','FindingUsController@update')->name('findinguss.update');


    Route::get('footers','FooterController@index');
    Route::get('footers/{id}','FooterController@show')->name('footers.show');
    Route::post('footers','FooterController@update')->name('footers.update');


    Route::get('headers','HeaderController@index');
    Route::get('headers/{id}','HeaderController@show')->name('headers.show');
    Route::post('headers','HeaderController@update')->name('headers.update');

    Route::get('innerabouts','InnerAboutController@index');
    Route::get('innerabouts/{id}','InnerAboutController@show')->name('innerabouts.show');
    Route::post('innerabouts','InnerAboutController@update')->name('innerabouts.update');

    Route::get('homess','HomePageController@index');
    Route::get('homess/{id}','HomePageController@show')->name('homess.show');
    Route::post('homess','HomePageController@update')->name('homess.update');


    Route::get('mapareas','MapAreaController@index');
    Route::get('mapareas/{id}','MapAreaController@show')->name('mapareas.show');
    Route::post('mapareas','MapAreaController@update')->name('mapareas.update');


    Route::get('nameitems','NameItemController@index');
    Route::get('nameitems/{id}','NameItemController@show')->name('nameitems.show');
    Route::post('nameitems','NameItemController@update')->name('nameitems.update');



    Route::get('nameitemtwos','NameItemTwoController@index');
    Route::get('nameitemtwos/{id}','NameItemTwoController@show')->name('nameitemtwos.show');
    Route::post('nameitemtwos','NameItemTwoController@update')->name('nameitemtwos.update');


    Route::get('originalservices','OriginalServiceController@index')->name('originalservice.originalservices');
    Route::get('originalservices/create','OriginalServiceController@create')->name('originalservices.create');
    Route::post('originalservices/create','OriginalServiceController@store')->name('originalservices.store');
    Route::get('originalservices/{id}','OriginalServiceController@show')->name('originalservices.show');
    Route::get('delete/{id}','OriginalServiceController@destroy');
    Route::post('originalservices','OriginalServiceController@update')->name('originalservices.update');


    Route::get('posts','PostController@index');
    Route::get('posts/create','PostController@create')->name('posts.create');
    Route::post('posts/create','PostController@store')->name('posts.store');
    Route::get('posts/{id}','PostController@show')->name('posts.show');
    Route::post('posts/{id}','PostController@destroy')->name('posts.destroy');
    Route::post('posts','PostController@update')->name('posts.update');


    Route::get('serviceareas','ServiceAreaController@index');
    Route::get('serviceareas/{id}','ServiceAreaController@show')->name('serviceareas.show');
    Route::post('serviceareas','ServiceAreaController@update')->name('serviceareas.update');


    Route::get('servicedetailss','ServiceDetailsController@index');
    Route::get('servicedetailss/{id}','ServiceDetailsController@show')->name('servicedetailss.show');
    Route::post('servicedetailss','ServiceDetailsController@update')->name('servicedetailss.update');


    Route::get('servicedones','ServiceDoneController@index');
    Route::get('servicedones/{id}','ServiceDoneController@show')->name('servicedones.show');
    Route::post('servicedones','ServiceDoneController@update')->name('servicedones.update');


    Route::get('singleservices','SingleServiceController@index');
    Route::get('singleservices/{id}','SingleServiceController@show')->name('singleservices.show');
    Route::post('singleservices','SingleServiceController@update')->name('singleservices.update');


    Route::get('sliders','SliderController@index');
    Route::get('sliders/{id}','SliderController@show')->name('sliders.show');
    Route::post('sliders','SliderController@update')->name('sliders.update');


    Route::get('socilas','SocilaController@index');
    Route::get('socilas/{id}','SocilaController@show')->name('socilas.show');
    Route::post('socilas','SocilaController@update')->name('socilas.update');



    Route::get('standardservices','StandardServiceController@index');
    Route::get('standardservices/create','StandardServiceController@create')->name('standardservices.create');
    Route::post('standardservices/create','StandardServiceController@store')->name('standardservices.store');
    Route::get('standardservices/{id}','StandardServiceController@show')->name('standardservices.show');
    Route::post('standardservices/{id}','StandardServiceController@destroy')->name('standardservices.destroy');
    Route::post('standardservices','StandardServiceController@update')->name('standardservices.update');

    Route::get('teams','TeamController@index');
    Route::get('teams/{id}','TeamController@show')->name('teams.show');
    Route::post('teams','TeamController@update')->name('teams.update');



    Route::get('teamareas','TeamAreaController@index');
    Route::get('teamareas/{id}','TeamAreaController@show')->name('teamareas.show');
    Route::post('teamareas','TeamAreaController@update')->name('teamareas.update');

    Route::get('widgets','WidgetController@index');
    Route::get('widgets/{id}','WidgetController@show')->name('widgets.show');
    Route::post('widgets','WidgetController@update')->name('widgets.update');
    
    Route::get('widgetthrees','WidgetThreeController@index');
    Route::get('widgetthrees/{id}','WidgetThreeController@show')->name('widgetthrees.show');
    Route::post('widgetthrees','WidgetThreeController@update')->name('widgetthrees.update');


    Route::get('widgettwos','WidgetTwoController@index');
    Route::get('widgettwos/{id}','WidgetTwoController@show')->name('widgettwos.show');
    Route::post('widgettwos','WidgetTwoController@update')->name('widgettwos.update');
    
});




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
