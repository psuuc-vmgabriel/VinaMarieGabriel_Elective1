<?php

// Ginagamit ang 'use' upang mag-import ng mga class mula sa Laravel framework
use Illuminate\Support\Facades\Route; // Ginagamit ang Route facade para sa paglikha ng mga route
use App\Http\Controllers\Controller; // Ini-import ang Controller.php para magamit sa route

// Gumagawa ng GET route para sa root URL ('/') na magpapakita ng 'welcome' na view
Route::get('/', function () {
    return view('welcome'); // Ipinapakita ang view na 'welcome.blade.php'
});

// Gumagawa ng GET route na may dalawang parameter (num1 at num2)
// Kapag tinawag ang URL na '/multiply/4/3', tatawagin nito ang multiply method sa Controller class
Route::get('/multiply/{num1}/{num2}', [Controller::class, 'multiply']);
