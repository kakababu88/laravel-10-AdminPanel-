<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
        //Category Headline & Description
        // Route::get('/headline','CategoryController@index');

Route::prefix('')->namespace('App\Http\Controllers')->group(function(){
    Route::get('/','HomeController@index');
});


Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    Route::match (['get','post'],'login','AdminController@login');

    Route::group(['middleware'=>['admin']],function(){
        Route::get('dashboard','AdminController@dashboard');

        Route::match(['get','post'],'profile','AdminController@profile');
        
        Route::match(['get','post'],'update-info','AdminController@updateInfo');
        Route::match(['get','post'],'update-password','AdminController@updatePassword');
        Route::post('check-current-password','AdminController@checkCurrentPassword');
        Route::get('logout','AdminController@logout');

        //Display CMS Pages (Croud - Read)
        Route::get('cms-pages','CmsController@index');
        Route::post('update-cms-page-status','CmsController@update');
        Route::match(['get','post'],'add-edit-cms-page/{id?}','CmsController@edit');
        Route::get('delete-cms-page/{id?}','CmsController@destroy');


        //Category Headline & Description
        Route::get('headline','CategoryController@index');
        Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@edit');
        Route::get('headline/{id?}','CategoryController@destroy');

        //Slide Information
        Route::get('slide','SlideController@index');
        Route::post('update-slide-status','SlideController@update');
        Route::match(['get','post'],'add-edit-slide/{id?}','SlideController@edit');
        Route::get('delete-slide/{id?}','SlideController@destroy');

        // //booking


        //Service Information
        Route::get('service','ServiceController@index');
        Route::post('update-service-status','ServiceController@update');
        Route::match(['get','post'],'add-edit-service/{id?}','ServiceController@edit');
        Route::get('delete-service/{id?}','ServiceController@destroy');


        //Tour Service
        Route::get('tour_service','TourServiceController@index');
        Route::post('update-tour_service-status','TourServiceController@update');
        Route::match(['get','post'],'add-edit-tour_service/{id?}','TourServiceController@edit');
        Route::get('delete-tour_service/{id?}','TourServiceController@destroy');

        //Package Information
        Route::get('package','PackageController@index');
        Route::post('update-package-status','PackageController@update');
        Route::match(['get','post'],'add-edit-package/{id?}','PackageController@edit');
        Route::get('delete-package/{id?}','PackageController@destroy');


        //Memory
        Route::get('memory','MemoryController@index');
        Route::post('update-memory-status','MemoryController@update');
        Route::match(['get','post'],'add-edit-memory/{id?}','MemoryController@edit');
        Route::get('delete-memory/{id?}','MemoryeController@destroy');


        //Contract Information
        Route::get('contract','ContractController@index');
        Route::post('update-contract-status','ContractController@update');
        Route::match(['get','post'],'add-edit-contract/{id?}','ContractController@edit');
        Route::get('delete-contract/{id?}','ContractController@destroy');



        //Social Information
        Route::get('socal','SocalController@index');
        Route::post('update-socal-status','SocalController@update');
        Route::match(['get','post'],'add-edit-socal/{id?}','SocalController@edit');
        Route::get('delete-socal/{id?}','SocalController@destroy');


        // //NewsLeter
        // Route::get('slide','SlideController@index');
        // Route::post('update-slide-status','SlideController@update');
        // Route::match(['get','post'],'add-edit-slide/{id?}','SlideController@edit');
        // Route::get('delete-slide/{id?}','SlideController@destroy');


    }); 
});

