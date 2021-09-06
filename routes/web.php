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

route::get('/slide', 'IndexController@slidetest')->name('client.category');
Route::get('/', 'IndexController@index')->name('client.home');
Route::get('/tkb', 'diemdanhController@diemdanh1')->name('client.demoSchedule');
Route::get('/tkb/get', 'diemdanhController@getdiemdanh1');// Get parse value TKB

/* Route::post('/tkb/followday', 'DateController@followday')->name('tkb.followday'); */

Route::get('/room', 'RoomController@listroom')->name('client.adDsRoom'); // Hiển thị danh sách room */
Route::get('/room/createroom', 'RoomController@create'); // Thêm room mới
Route::post('room/createroom', 'RoomController@store'); // Xử lý room thêm mới
Route::get('room/{id}/edit', 'RoomController@edit'); // Sửa 
Route::post('room/update', 'RoomController@update'); // Xử lý sửa 
Route::get('room/{id}/delete', 'RoomController@destroy');

Route::get('/class', 'ClassController@class_index')->name('client.adDsClass'); // Hiển thị danh sách class */
Route::get('/class/createclass', 'ClassController@create'); // Thêm lớp học mới
Route::post('class/createclass', 'ClassController@store'); // Xử lý lớp học thêm mới

Route::get('/device', 'DeviceController@listdevice')->name('client.adDsDevice'); // Hiển thị danh sách device */
Route::get('/device/get', 'DeviceController@getlistdevice');// Get parse value device
Route::get('/device/createdevice', 'DeviceController@create'); // Thêm device mới
Route::post('device/createdevice', 'DeviceController@store'); // Xử lý device thêm mới
Route::get('device/{id}/edit', 'DeviceController@edit'); // Sửa 
Route::post('device/update', 'DeviceController@update'); // Xử lý sửa

Route::get('/login/logout', 'IndexController@logout');
Route::get('/diemdanh', 'diemdanhController@diemdanh')->name('client.diemdanh'); // Hiển thị danh sách điểm danh */

/* Auth::routes(); */
// Đăng nhập và xử lý đăng nhập
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('sinhvien', 'UserController@sinhvien_index')->name('client.adDsUser');  // Hiển thị danh sách sv */
Route::get('sinhvien/create', 'UserController@create'); // Thêm mới 
Route::post('sinhvien/create', 'UserController@store'); // Xử lý thêm mới
Route::get('sinhvien/{id}/edit', 'UserController@edit'); // Sửa 
Route::post('sinhvien/update', 'UserController@update'); // Xử lý sửa 
Route::get('sinhvien/{id}/delete', 'UserController@destroy'); // Xóa 
Route::get('sinhvien/get', 'UserController@getsinhvien_index'); // Get value danh sách sinh viên

Route::get('lop/{id}/show', 'StudentofclassController@show'); // show ds 
Route::get('lop/{id}/show/get', 'StudentofclassController@getshow');
Route::get('lop/{id}/show/createstudent', 'StudentofclassController@create'); // Thêm lớp học mới
Route::post('lop/{id}/show/createstudent', 'StudentofclassController@store');

Route::get('diemdanhlop/{id}/show', 'diemdanhController@show');
Route::get('diemdanhlop/{id}/show/createstudent', 'diemdanhController@create'); // Thêm sinh viên vào lớp học 
Route::post('diemdanhlop/{id}/show/createstudent', 'diemdanhController@store');
Route::get('diemdanhlop/{id}/show/{mssv_student}/delete', 'diemdanhController@destroy');
/*Ảnh hiển thị sinh viên*/
// upload và xử lý upload
Route::get('sinhvien/{id}/upload', 'UploadController@uploadForm');
Route::post('sinhvien/{id}/upload', 'UploadController@uploadSubmit');

//Sent Message MSM 
//Route::post()