<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

// use Illuminate\Support\Facades\Route;

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


// Route::get('/', function() {
//     return 'Homepage new';
// });

// Route::get('/about', function() {
//     return 'About new';
// });

// Route::get('url', 'Action');
// Route::post('', '');
// Route::put('', '');
// Route::patch('', '');
// Route::delete('', '');

Route::post('/', function() {
    return 'Homepage Page - Post';
});

Route::put('/', function() {
    return 'Homepage Page - Put';
});

Route::delete('/', function() {
    return 'Homepage Page - Delete';
});

Route::get('/', function() {
    return 'Homepage Page - Get';
});

// anonymous, callback, clouser

// function sayHi () {
//     echo
//     return
// }

// function vat ($price) {
//     return $price * .15;
// }

// $vat = vat(100);

// echo $price + $vat;

// Route::match(['patch', 'put'], 'privacy', function() {
//     return 'Done';
// });

// Route::any('contact', function() {
//     return 'Any';
// });

// Route::get('/user/{name}', function($name) {
//     return 'Welcome ' . $name;
// });

Route::get('sessions/{course}/{type?}', function ($course, $type = '') {
    return 'Course ' . $course . ' ' . $type;
});


Route::prefix('admin')->group(function() {
    Route::get('/home', function() { return 'Admin Home'; });
    Route::get('/posts', function() { return 'Admin Posts'; });
    Route::get('/products', function() { return 'Admin Products'; });
    Route::get('/orders', function() { return 'Admin Orders'; });
});

// Route::fallback(function() {
//     return 'فش صفحة ي حبيبي';
// });

// Route::get('/{ddd}', function() {
//     return 'Error';
// });

// Route::get('/{ddd}/{dd}/{d}/{de}', function() {
//     return 'Error';
// });

// Route::get('/{ddd}/{re}/{qq}', function() {
//     return 'Error';
// });

// Route::get('/{ddd}/{qq}', function() {
//     return 'Error';
// });
