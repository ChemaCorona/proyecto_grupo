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

# Descomentar después

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    return view('form');
});

Route::post('submitForm','OrderDetailController@store');

Route::get('pdf', function(){

        Fpdf::AddPage();
        Fpdf::SetFont('Arial','B',16);
        Fpdf::Cell(40,10,'Hello World!');
        Fpdf::Output();
        exit;

});

Route::get('/index','UserDetailController@index');
Route::get('/downloadPDF/{id}','Order@downloadPDF');