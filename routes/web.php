<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
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
Route::get('/',[AdminController::class,'home_index']);
#END HOME ROUTES

#START ABOUT-US ROUTES
Route::get('about-us',[AdminController::class,'about_Us']);
#END ABOUT-US ROUTES

#START OPERATIONS-EXPLORATION ROUTES
Route::get('exploration', [AdminController::class,'exploration_Ops']);
#END OPERATIONS-EXPLORATION ROUTES

#START OPERATIONS-MINING ROUTES
Route::get('mining_processing', [AdminController::class,'mining_processing_Ops']);
#END OPERATIONS-MINING ROUTES

#START OPERATIONS-SALE-GOLD ROUTES
Route::get('sale_product',[AdminController::class,'sale_products']);
#END OPERATIONS-SALE-GOLD ROUTES

#START OPERATIONS-rehabilitation ROUTES
Route::get('rehabilitation',[AdminController::class,'rehabilitation_Ops']);
#END OPERATIONS-rehabilitation ROUTES

#START SUSTAINABILITY-responsible-mining ROUTES
Route::get('responsible_mining',[AdminController::class,'responsible_mining_Susta']);
#END SUSTAINABILITY-responsible-mining ROUTES

#START SUSTAINABILITY-health-safety ROUTES
Route::get('health_safety',[AdminController::class,'health_safety_Susta']);
#END SUSTAINABILITY-health-safety ROUTES

#START SUSTAINABILITY-environmental-management ROUTES
Route::get('environmental_management',[AdminController::class,'environ_management_Susta']);
#END SUSTAINABILITY-environmental-management ROUTES

#START SUSTAINABILITY-social-performance ROUTES
Route::get('social_performance',[AdminController::class,'social_performance_Susta']);
#END SUSTAINABILITY-social-performance ROUTES

#START CONTACTS US ROUTES
Route::get('contact-us',[AdminController::class,'contact_Us']);
Route::post('client/contact-Us',[ContactUsController::class,'contact_Us']);
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
 Route::get('admin/company/profile',function(){
    return view('admin.admin_company_profile');
 });
 Route::get('admin/blogs', function(){
     return view('admin.admin_blogs');
 });
Route::get('admin/email', [AdminController::class,'email_list']);

 Route::post('admin/home/about',[AdminController::class,'submitHomeAboutImage']);
 Route::post('admin/home/process',[AdminController::class,'submitHomeProcessImages']);
 Route::post('admin/home/sustanability',[AdminController::class,'submitHomeSustanabilityImages']);
 Route::post('admin/home/our/team',[AdminController::class,'submitHomeOurTeamImages']);
 Route::post('admin/aboutUs/main/content',[AdminController::class,'submitAboutUsMainContent']);
 Route::post('admin/aboutUs/mission',[AdminController::class,'submitAboutUsMission']);
 Route::post('admin/aboutUs/vission',[AdminController::class,'submitAboutUsVission']);
 Route::post('admin/exploration/operation',[AdminController::class,'submitExplorationOp']);
 Route::post('admin/gold/mining/operation',[AdminController::class,'submitGoldMiningOp']);
 Route::post('admin/processing/operation',[AdminController::class,'submitProcessingOp']);
 Route::post('admin/rehabilitation',[AdminController::class,'submitRehabilitationOp']);
 Route::post('admin/export/gold',[AdminController::class,'submitExportofGoldOp']);
 Route::post('admin/responsible/mining',[AdminController::class,'submitResponsibleMining']);
 Route::post('admin/health/safety',[AdminController::class,'submitHealthandSafety']);
 Route::post('admin/environmental/management',[AdminController::class,'submitEnvronmentManagement']);
 Route::post('admin/social/performance',[AdminController::class,'submitSocialPerformance']);
 Route::post('company/profile/upload',[AdminController::class,'uploadCompanyProfile']);
 Route::post('admin/blog',[AdminController::class,'blogs']);

 #END ADMIN ROUTERS


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
