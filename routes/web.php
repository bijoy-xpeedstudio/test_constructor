<?php

use App\Models\People;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Pow;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data/get', function () {
    return People::all();
});

Route::get('/data/store', function () {
    $data = new People();
    $data->name = 'foo';
    $data->save();
});
