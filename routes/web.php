<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function() {
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});




Route::get('/Adminlfc/Data_Lapangan','MenuAdmin1Controller@indexlapangan');

Route::resource('/Members','MemberController');

Route::resource('/Events','EventController');


Route::get('/Adminlfc/Data_Booking','BookingController@index');

Route::get('/tampilan_event','TampilanEventController@index');