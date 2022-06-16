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
#START HOME ROUTES
Route::get('/', function () {
    return view('home');
});
#END HOME ROUTES

#START ABOUT-US ROUTES
Route::get('about-us', function () {
    return view('about-us');
});
#END ABOUT-US ROUTES

#START OPERATIONS-EXPLORATION ROUTES
Route::get('exploration', function () {
    return view('operations.exploration');
});
#END OPERATIONS-EXPLORATION ROUTES

#START OPERATIONS-MINING ROUTES
Route::get('mining_processing', function () {
    return view('operations.mining-processing');
});
#END OPERATIONS-MINING ROUTES

#START OPERATIONS-SALE-GOLD ROUTES
Route::get('sale_product', function () {
    return view('operations.sale-products');
});
#END OPERATIONS-SALE-GOLD ROUTES

#START OPERATIONS-rehabilitation ROUTES
Route::get('rehabilitation', function () {
    return view('operations.rehabilitation-closure');
});
#END OPERATIONS-rehabilitation ROUTES

#START SUSTAINABILITY-responsible-mining ROUTES
Route::get('responsible_mining', function () {
    return view('sustainability.responsible-mining');
});
#END SUSTAINABILITY-responsible-mining ROUTES

#START SUSTAINABILITY-health-safety ROUTES
Route::get('health_safety', function () {
    return view('sustainability.health-safety');
});
#END SUSTAINABILITY-health-safety ROUTES

#START SUSTAINABILITY-environmental-management ROUTES
Route::get('environmental_management', function () {
    return view('sustainability.environmental-management');
});
#END SUSTAINABILITY-environmental-management ROUTES

#START SUSTAINABILITY-social-performance ROUTES
Route::get('social_performance', function () {
    return view('sustainability.social-performance');
});
#END SUSTAINABILITY-social-performance ROUTES

#START CONTACTS US ROUTES
Route::get('contact-us', function () {
    return view('contact-us');
});
#END CONTACTS US ROUTES

#START ADMIN ROUTERS

Route::get('/admin-dashboard', function() {
    return view('admin.admin_home_sliders');
 });
 Route::get('/form-uploads', function(){
     return view('admin.form-uploads');
 });
 Route::get('/admin-home-sliders', function(){
     return view('admin.admin_home_sliders');
 });
 Route::get('/admin-home-about', function(){
     return view('admin.admin_home_about');
 });
 Route::get('/admin-home-process', function(){
     return view('admin.admin_home_process');
 });
 Route::get('/admin-home-sustanability', function(){
     return view('admin.admin_home_sustanability');
 });
 Route::get('/admin-home-our-team', function(){
     return view('admin.admin_home_our_team');
 });
 Route::get('/admin-aboutUs-main-content', function(){
     return view('admin.aboutUs_main_content');
 });
 Route::get('/admin-aboutUs-mission', function(){
     return view('admin.aboutUs_mission');
 });
 Route::get('/admin-aboutUs-vission', function(){
     return view('admin.aboutUs_vission');
 });
 Route::get('/admin-exploration-operation', function(){
     return view('admin.admin-exploration-operation');
 });
 Route::get('/admin_gold_mining_operation', function(){
     return view('admin.admin_gold_mining_operation');
 });
 Route::get('/admin_processing_operation', function(){
     return view('admin.admin_processing_operation');
 });
 Route::get('/admin_rehabilitation', function(){
     return view('admin.admin_rehabilitation');
 });
 Route::get('/admin_export_gold', function(){
     return view('admin.admin_export_gold');
 });
 Route::get('/admin_responsible_mining', function(){
     return view('admin.admin_responsible_mining');
 });
 Route::get('/admin_health_safety', function(){
     return view('admin.admin_health_safety');
 });
 Route::get('/admin_environmental_management', function(){
     return view('admin.admin_environmental_management');
 });
 Route::get('/admin_social_performance', function(){
     return view('admin.admin_social_performance');
 });
 Route::post('contactUs','ContactUsController@contact_Us_emailSend');

 Route::post('/admin-home-about','AdminController@submitHomeAboutImage');
 Route::post('/admin-home-process','AdminController@submitHomeProcessImages');
 Route::post('/admin-home-sustanability','AdminController@submitHomeSustanabilityImages');
 Route::post('/admin-home-our-team','AdminController@submitHomeOurTeamImages');
 Route::post('/admin-aboutUs-main-content','AdminController@submitAboutUsMainContent');
 Route::post('/admin-aboutUs-mission','AdminController@submitAboutUsMission');
 Route::post('/admin-aboutUs-vission','AdminController@submitAboutUsVission');
 Route::post('/admin-exploration-operation','AdminController@submitExplorationOp');
 Route::post('/admin_gold_mining_operation','AdminController@submitGoldMiningOp');
 Route::post('/admin_processing_operation','AdminController@submitProcessingOp');
 Route::post('/admin_rehabilitation','AdminController@submitRehabilitationOp');
 Route::post('/admin_export_gold','AdminController@submitExportofGoldOp');
 Route::post('/admin_responsible_mining','AdminController@submitResponsibleMining');
 Route::post('/admin_health_safety','AdminController@submitHealthandSafety');
 Route::post('/admin_environmental_management','AdminController@submitEnvronmentManagement');
 Route::post('/admin_social_performance','AdminController@submitSocialPerformance');
 #END ADMIN ROUTERS

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
