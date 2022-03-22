<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/iccie_admin/private/login','admin_controller@admin_login');
Route::post('/iccie_admin/private/login/request','admin_controller@admin_login_request');

Route::group(['prefix'=>'admin','middleware'=>'admin_permission'], function(){
    Route::get('/home','admin_controller@home');

    Route::get('/logout', 'admin_controller@admin_logout');
    
    Route::get('/home_page_article','admin_controller@home_page_article');
    Route::post('/home_page_article','admin_controller@home_page_article_post');
    Route::get('/home/add_scope','admin_controller@add_scope');
    Route::post('/home/add_scope','admin_controller@add_scope_req');
    Route::get('/home/delete_scope/{scope_id}','admin_controller@delet_scope');
    Route::get('/home/add_committee','admin_controller@add_committee');
    Route::post('/home/add_committee','admin_controller@add_committee_req');
    Route::get('/delete_commitee_member/{delete_id}','admin_controller@delete_commitee_member');
    Route::post('/call_for_paper_post','admin_controller@call_for_paper_post');
    Route::get('/call_for_paper_get','admin_controller@call_for_paper_get');
    Route::get('/delete_call_for_paper/{delete_id}','admin_controller@delete_call_for_paper');
    Route::get('/add_important_date','admin_controller@add_important_date');
    Route::post('/add_important_date','admin_controller@add_important_date_post');
    Route::get('/home/delete_date/{delete_id}','admin_controller@delete_date');
    Route::get('/add_banner','admin_controller@add_banner');
    Route::post('/add_banner_title','admin_controller@add_banner_title');
    Route::post('/add_banner_home','admin_controller@add_banner_home');
    Route::post('home/add_committee_final','admin_controller@add_committee_final');
    Route::get('/add_registration','admin_controller@add_registration_get');
    Route::post('/add_registration_cost','admin_controller@add_registration_cost_post');
    Route::get('/delete_cost/{delete_id}','admin_controller@delete_cost');
    Route::post('/admin_logout','admin_controller@admin_logout');
    Route::get('/add_reg_instruction','admin_controller@add_reg_instruction_get');
    Route::post('/add_reg_instruction','admin_controller@add_reg_instruction_post');
    Route::get('/registration_instruction_delete/{delete_id}','admin_controller@registration_instruction_delete');

    Route::get('/add_speaker','admin_controller@add_speaker_get');
    Route::post('/add_speaker','admin_controller@add_speaker_post');
    Route::get('/delete_speaker/{delete_id}','admin_controller@delete_speaker');

    Route::get('/add_schedule','admin_controller@add_schedule');
    Route::post('/add_schedule','admin_controller@add_schedule_post');
    Route::get('/delete_schedule/{delete_id}','admin_controller@delete_schedule');

    Route::get('/add_camera_submission','admin_controller@add_camera_submission_get');
    Route::post('/add_camera_submission','admin_controller@add_camera_submission_post');
    Route::get('/delete_camera_submission/{delete_id}','admin_controller@delete_camera_submission');

    Route::get('/add_contact','admin_controller@add_contact');
    Route::post('/add_contact','admin_controller@add_contact_post');
    Route::get('/delete_contact/{delete_id}','admin_controller@delete_contact');


    Route::get('/add_accessory_pdf_logo','admin_controller@add_accessory_pdf_logo');
    Route::post('/add_accessory_pdf_logo','admin_controller@add_accessory_pdf_logo_post');
    Route::get('/delete_accessory_pdf_logo/{delete_id}','admin_controller@delete_accessory_pdf_logo');
    
    Route::get('/add_valid_papers','admin_controller@add_valid_papers');
    Route::post('/add_valid_papers','admin_controller@add_valid_papers_post');
    Route::get('/delete_valid_paper/{delete_id}','admin_controller@delete_valid_paper');
    
    Route::get('/verify_paper_payment','admin_controller@verify_paper_payment');
    
});

//USER SECTION 


Route::get('/','iccie_maincontroller@index');
Route::get('/scope','iccie_maincontroller@icecte_scope');
Route::get('/committee_member','iccie_maincontroller@committee_member');
Route::get('/call_for_paper','iccie_maincontroller@call_for_paper');
Route::get('/paper_submission','iccie_maincontroller@paper_submission');

Route::get('/camera_paper_submission','iccie_maincontroller@camera_paper_submission');
Route::get('/speakers','iccie_maincontroller@speakers_get');

Route::get('/registration','iccie_maincontroller@registration');
Route::post('/registration','iccie_maincontroller@add_registration_infos_post');


Route::get('/proceedings','iccie_maincontroller@proceedings');
Route::get('/accepted_Paper_list','iccie_maincontroller@accepted_Paper_list');
Route::get('/post_Conference_tour','iccie_maincontroller@post_Conference_tour');
Route::get('/accomodation','iccie_maincontroller@accomodation');
Route::get('/program_schedule','iccie_maincontroller@program_schedule_get');



