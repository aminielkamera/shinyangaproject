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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
