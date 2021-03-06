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

Route::get('/Members','MemberController@index');
Route::get('/Members/create','MemberController@create');
Route::get('/Members/cari','MemberController@cari');
Route::post('/Members/store','MemberController@store');
Route::get('/Members/edit/{id}','MemberController@edit');
Route::get('/Members/show/{id}','MemberController@show');
Route::post('/Members/update','MemberController@update');
Route::get('/Members/hapus/{id}','MemberController@hapus');

Route::resource('/MemberBR','MemberkuController');
Route::get('/MemberBR/create','MemberkuController@create');
Route::post('/MemberBR/store','MemberkuController@store');

Route::resource('/BookingP','BookingPController');
Route::get('/TambahBookingP','BookingPController@create');
Route::post('/TambahdataBookingP','BookingPController@store');
Route::get('/sukses','BookingPController@index');

Route::resource('/Events','EventController');
Route::get('/Events/create','EventController@create');
Route::post('/Events/store','EventController@store');
Route::get('/Events/edit/{id}','EventController@edit');
Route::post('/Events/update','EventController@update');
Route::get('/Events/hapus/{id}','EventController@hapus');

Route::get('/DataBooking','BookingController@index');
Route::get('/TambahBooking','BookingController@create');
Route::post('/TambahdataBooking','BookingController@store');
Route::get('/Edit/{id_booking}','BookingController@edit');
Route::post('/Update/{id_booking}','BookingController@update');
Route::get('/Hapus/{id_booking}','BookingController@destroy');
Route::get('/DataBooking/cari','BookingController@cari');

Route::get('/Datapembayaran','PembayaranController@index');
Route::get('/Tambahbayar','PembayaranController@create');
Route::post('/Tambahdatabayar','PembayaranController@store');
Route::get('/cetakbayar/{id}','PembayaranController@show');
Route::get('/Editbayar/{id}','PembayaranController@edit');
Route::post('/Updatebayar/{id}','PembayaranController@update');
Route::get('/Hapusbayar/{id}','PembayaranController@destroy');
Route::get('/Datapembayaran/cari','PembayaranController@cari');

Route::get('/tampilan_event','TampilanEventController@index');

Route::resource('/Saran','SaranController');
Route::get('/Tambahsaran','SaranController@create');
Route::post('/Tambahdatasaran','SaranController@store');
Route::get('/Hapus/{id_saran}','SaranController@destroy');
Route::get('/sukses','SaranController@index');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/Dataupload', 'UploadController@index');
Route::get('/upload/hapus/{id}','UploadController@hapus');