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

//Route::get('go', 'DataController@draw');
Route::get('/', 'DataController@index');
Auth::routes();

 
/*Route::get('/go', [
    'as'   => 'go',
    'uses' => function () {
        
        return Datatables::of($users=Tropa::all())->make(true);
    }
]);
*/
Route::get('go','DataController@draw')->name('go');
 // return Datatables::of( $tropa=Tropa::all())->make(true);

// Display view
Route::get('datatable', 'DataController@index');
// Get Data
Route::get('datatable1', 'DataController@draw');
Route::get('datatable/getdata', 'DataController@draw')->name('datatable/getdata');