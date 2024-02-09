<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome-page');

Route::get('/',function(){
    return view('front.index');
})->name('home-page');

Route::get('/about', function () {
    return view('front.about');
})->name('about-page');

Route::get('/card', function () {
    return view('front.card');
})->name('card-page');

Route::get('/checkout', function () {
    return view('front.checkout');
})->name('checkout-page');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact-page');

Route::get('/index_2', function () {
    return view('front.index_2');
})->name('index-2-page');

Route::get('/news', function () {
    return view('front.news');
})->name('news-page');

Route::get('/shop', function () {
    return view('front.shop');
})->name('shop-page');

Route::get('/single-news', function () {
    return view('front.single_news');
})->name('single-news-page');

Route::get('/single-product', function () {
    return view('front.single_product');
})->name('single-product-page');

Route::get('/404', function () {
    return view('front.404');
})->name('404-page');




// Route::resource('students', StudentController::class);



// // Route::view('/welcome','welcome');

// Route::get('/users',function(Request $r){
//     return $r;
// });


// Route::get('/store', function () {
//     return view('welcome');  
// })->name('store');


// Route::get('/user/{name}', function (string $name = 'John') {
//     return $name;
// });

// Route::redirect('/test','/users');

// Route::get('/user/{id?}', function (string $id = "2021") {
//     // ...
//     return "ok ".$id;
// })->where('id', '[0-9]+');
 

