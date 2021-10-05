<?php

use Illuminate\Support\Facades\Auth;
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

      Auth::routes(['verify' => true]);

                                ############ start user Side #############
        ################################### user side manage ##########################################
        Route::get('/','HomeController@home_user')->name('home_user');
        Route::get('/display_item/{id}','HomeController@display_item')->name('display_item');
        Route::get('/items','HomeController@items')->name('items');
        Route::get('/vendors','HomeController@display_vendor')->name('display_vendor');
        Route::get('/Item_vendor/{id}','HomeController@display_Item_vendor')->name('display_Item_vendor');
        Route::get('/about_as','HomeController@about_as')->name('about_as');
        Route::get('/contact','HomeController@contact')->name('contact');
        Route::post('/contact_send','mailController@send')->name('send');
        ################################### user side manage  ##########################################
                                ############ end user Side #############
   Route::group(
    [
        'middleware' => ['auth','verified']
    ], function(){

    ################################# check side admain or vendor #################################
     Route::get('/home', 'HomeController@check')->name('home');
    ################################# check side admain or vendor #################################

                            ############ start vendor Side #############
    ################################# Vendor side manage profile ###################################
    Route::get('/create_profile','ProfileController@create_profile')->name('create_profile');
    Route::post('/create_profile_vendor','ProfileController@create_profile_vendor')->name('create_profile_vendor');
    Route::get('/my_profile','ProfileController@my_profile_info')->name('my_profile');
    Route::get('/delete_profile/{id}','ProfileController@delete_profile')->name('delete_profile');
    Route::get('/edit_profile/{id}','ProfileController@edit_profile')->name('edit_profile');
    Route::post('/edit_profile/update/{id}','ProfileController@update_profile')->name('update_profile');
    ################################# end Vendor side manage profile ################################

    ################################# Vendor side to manage Item ####################################
    Route::get('/addition','VendorController@addition')->name('addition');
    Route::post('/add_Item','VendorController@add_Item')->name('add_Item');
    Route::get('/deleteItem/{id}','VendorController@deleteItem')->name('deleteItem');
    Route::get('/edit_item/{id}','VendorController@edit_item')->name('edit_item');
    Route::post('/update_Item/{id}','VendorController@update_Item')->name('update_Item');
    ################################ end  Vendor side to manage Item ################################
                            ############ end  vendor Side #############


                            ############ start Admain Side #############
    ################################### Start Manage Admain Routes ############################
    Route::get('/manage_admain','admainController@manage_admain')->name('manage_admain');
    Route::get('/add_admain','admainController@add_admain')->name('add_admain');
    Route::post('/insert_admain','admainController@insert_admain')->name('insert_admain');
    Route::get('/delete_admain/{id}','admainController@delete_admain')->name('delete_admain');
    Route::get('/edit_admain/{id}','admainController@edit_admain')->name('edit_admain');
    Route::post('/update_admain/{id}','admainController@update_admain')->name('update_admain');
    ################################### End Manage Admain Routes ###############################

    ################################### Start Manage vendor Routes #############################
    Route::get('/manage_vendor','admainController@manage_vendor')->name('manage_vendor');
    Route::get('/delete_vendor/{id}','admainController@delete_vendor')->name('delete_vendor');
    #################################### End Manage vendor Routes ##############################

    #################################### Start Manage Item Route  ##############################
    Route::get('/manage_item','admainController@manage_item')->name('manage_item');
    Route::get('/show_item_vendor/{id}','admainController@show_item_vendor')->name('show_item_vendor');
    Route::get('/delete_item/{id}','admainController@delete_item')->name('delete_item');
    #################################### End Manage Item Route    ##############################
                                 ############ end Admain Side #############
});
