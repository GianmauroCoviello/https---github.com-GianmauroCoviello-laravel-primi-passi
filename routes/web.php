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

Route::get('/', function () {
    // inseriamo un array associativo che conterra le informazioni da riprendere nella home
    $data= [

        'title' => 'Hello World',
        'Text'  => 'Ciao Laravel'

    ];
    // riprendiamo l'array  nella home.blade
    return view('home',$data);
});  
