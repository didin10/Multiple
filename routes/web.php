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
Route::get('/Members/create','MemberController@create');
Route::post('/Members/store','MemberController@store');
Route::get('/Members/edit/{id}','MemberController@edit');
Route::post('/Members/update','MemberController@update');
Route::get('/Members/hapus/{id}','MemberController@hapus');

Route::resource('/MemberBR','MemberkuController');
Route::get('/MemberBR/create','MemberkuController@create');
Route::post('/MemberBR/store','MemberkuController@store');



Route::resource('/Events','EventController');
Route::get('/Events/create','EventController@create');
Route::post('/Events/store','EventController@store');
Route::get('/Events/edit/{id}','EventController@edit');
Route::post('/Events/update','EventController@update');
Route::get('/Events/hapus/{id}','EventController@hapus');


Route::get('/Adminlfc/Data_Booking','BookingController@index');

Route::get('/tampilan_event','TampilanEventController@index');