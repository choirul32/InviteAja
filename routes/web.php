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
use App\Invitation_info;
use App\Template;
Route::get('test/{id}', 'WeddingTemplateController@test');

Auth::routes();

Route::get('/', 'LandingPageController@index')->name('index');
Route::get('/detail1', 'LandingPageController@detail1')->name('detail1');
Route::get('/detail2', 'LandingPageController@detail2')->name('detail2');
Route::get('/detail3', 'LandingPageController@detail3')->name('detail3');

Route::get('/detail4', 'LandingPageController@detail4')->name('detail4');
Route::get('/detail5', 'LandingPageController@detail5')->name('detail5');
Route::get('/detail6', 'LandingPageController@detail6')->name('detail6');

Route::get('/detail7', 'LandingPageController@detail7')->name('detail7');
Route::get('/detail8', 'LandingPageController@detail8')->name('detail8');
Route::get('/detail9', 'LandingPageController@detail9')->name('detail9');
Route::get('/test-dashboard', function(){
	return view('layouts.template-dashboard');
});

//POST COMMENTS
Route::post('/wedding/postcomment', 'WeddingTemplateController@postcomment');

// Route::get('/detail/{permalink}', ['uses'=>'LandingPageController@detail', 'as'=>'detail']);
// Route::get('/detail/{id}', 'LandingPageController@detail');

// Route::get('/login', 'LoginController@login')->name('login');
// Route::get('/register', 'RegisterController@register')->name('register');
// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/wedding/{permalink}',['uses'=>'HomeController@wedding', 'as'=>'wedding']);

Route::get('/wedding/{permalink}',['uses'=>'WeddingTemplateController@wedding', 'as'=>'wedding']);
Route::get('/wedding/{permalink}/{template}/{partial}',['uses'=>'WeddingTemplateController@ajax', 'as'=>'ajax']);

// Route::get('/wedding/bride/{permalink}',['uses'=>'WeddingTemplateController@bride', 'as'=>'bride']);
// Route::get('/wedding/event/{permalink}',['uses'=>'WeddingTemplateController@bride', 'as'=>'event']);
// Route::get('/wedding/location/{permalink}',['uses'=>'WeddingTemplateController@bride', 'as'=>'location']);
// Route::get('/wedding/comment/{permalink}',['uses'=>'WeddingTemplateController@bride', 'as'=>'comment']);
// Route::get('/wedding/gallery/{permalink}',['uses'=>'WeddingTemplateController@bride', 'as'=>'gallery']);
// Route::get('/wedding/quotes/{permalink}',['uses'=>'WeddingTemplateController@bride', 'as'=>'quotes']);


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/bride', 'BrideController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/comment', 'CommentController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/event', 'EventController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/gallery', 'GalleryController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/home', 'HomeController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/invitationinfo', 'InvitationInfoController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/location', 'LocationsController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/quote', 'QuoteController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/templates', 'TemplateController', ['except' => ['show', 'create', 'store']]);
});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});


