<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom', function () {

    $msj = "Menasaje desde el servidor *-*";

    $data = ['msj' => $msj, "edad" => 25];

    return view('custom', $data);
});

*/

Route::get('/', [App\Http\Controllers\TestController::class, 'test']);