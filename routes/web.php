<?php

use Illuminate\Support\Facades\Route;

// class Person {

//     public  static function printName() {
//         echo 'Name';
//     }

// }

// // $p1 = new Person();

// // $p1->printName();

// Person::printName();

// Route::get( 'url' , 'Actoin' );
// Route::post( 'url' , 'Actoin' );
// Route::put( 'url' , 'Actoin' );
// Route::patch( 'url' , 'Actoin' );
// Route::delete( 'url' , 'Actoin' );

// use , namespace


Route::get('/', function() {
    return 'Homepage new';
});

Route::get('/about', function() {
    return 'About new';
});
