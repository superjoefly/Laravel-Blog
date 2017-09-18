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


// Using the SERVICE CONTAINER
// Bind class to Service Container (moved to Providers/AppServiceProvider.php):

// App::bind('App\Billing\Stripe', function () {
//     // Return new instance of Stripe class passing through secret
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });

// Resolve Stripe instance out of container:
// $stripe = resolve('App\Billing\Stripe');
// Dump it to the page:
// dd($stripe);


Route::get('/', 'PostsController@index')->name('home');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/posts/tags/{tag}', 'TagController@index');

// Adminer
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');
