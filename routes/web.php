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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viewer', function () {
    return view('viewer2');
});




Route::get('/g', function () {
    return view('gh');
});

Route::get('/render', function () {
    return view('viewer2');
});

Route::get('/home', 'PrintObjectController@index');

Auth::routes();


Route::post('s3-image-upload','S3ImageController@imageUploadPost');
Route::post('downloadStl','S3ImageController@downloadStl');


Route::get('printObjects', 'PrintObjectController@index');
Route::get('printObjects/{PrintObjectId}/delete', 'PrintObjectController@deletePrintObject');
Route::post('printObjects/{PrintObjectId}/update', 'PrintObjectController@updatePrintObject');
Route::get('printObjects/{PrintObjectId}/progress', 'PrintObjectController@progressPrintObject');

Route::post('printObjects/{PrintObjectId}/analize', 'PrintObjectController@analizePrintObject');


Route::get('image-thumb','S3ImageController@getThumbnail');
Route::get('getinfo','S3ImageController@getInfo');

