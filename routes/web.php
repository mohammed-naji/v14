<?php

// use App\Http\Controllers\SiteController;

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Test2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use function PHPUnit\Framework\returnSelf;

Route::get('/', [TestController::class, 'index'])->name('homepage');


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

// Route::post('/', function() {
//     return 'Homepage Page - Post';
// });

// Route::put('/', function() {
//     return 'Homepage Page - Put';
// });

// Route::delete('/', function() {
//     return 'Homepage Page - Delete';
// });

// Route::get('/', function() {
//     // return '<a href="'.url('/contact-us').'">Contact Us</a>';
//     // return '<a href="'.route('cpage').'">Contact Us</a>';
//     $name = 'ali';
//     $user = 'ali19';
//     $age = 19;
//     // return '<a href="'.url('user/'.$name.'/'.$user.'/'.$age).'">User Profile</a>';
//     return '<a href="'.route('userinfo', [$name, $user, $age]).'">User Profile</a>';
// });

// mohamednaji.com/v14/contact-us
// mohamednaji.com/contact-us


// Route::get('/contact', function() {
//     return 'Contact Us Page';
// })->name('cpage');


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

// Route::get('sessions/{course}/{type?}', function ($course, $type = '') {
//     return 'Course ' . $course . ' ' . $type;
// });



// DRY => Dont Repeate Yourself

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

// Route::get('/user/{name}/{username}/{age}', function($name, $username, $age) {
//     return "Welcome $name, username $username your age is $age";
// })->whereAlpha('name')->whereAlphaNumeric('username')->whereNumber('age')->name('userinfo');


// :: class::method oop
// => key => value array
// -> object -> method

// method -> method -> method -> method


// mohamednaji.com => main domain
// mohamednaji.com/v14 => sub directory
// v14.mohamednaji.com => sub domain

// $name = 'Moh';
// const name = 'Moh';
// define('name', 'Mohammed');

// echo name

// camelCase => newPageName
// PascalCase => NewPageName
// snake_case => new_page_name
// kebab-case => new-page-name
// UPPERCASE => NEWPAGENAME


// home, about, contact, team, services

Route::get('home', [SiteController::class, 'home'])->name('site.home');
Route::get('about', [SiteController::class, 'about'])->name('site.about');
Route::get('contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('team', [SiteController::class, 'team'])->name('site.team');
Route::get('services', [SiteController::class, 'services'])->name('site.services');

// Route::get('home', [SiteController::class, 'home']);

// Controller Type
// 1. Basic Controller
// 2. Invokable Controller
// 3. Resource Controller


Route::get('news', NewsController::class);

// PHP CRUD Application

Route::get('/profile/{id?}', [Test2Controller::class, 'index']);









Route::get('agency', [AgencyController::class, 'index']);
Route::post('agency', [AgencyController::class, 'index']);


Route::prefix('blog')->name('blog.')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/about', [BlogController::class, 'about'])->name('about');
    Route::get('/post', [BlogController::class, 'post'])->name('post');
    Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
});

Route::prefix('resume')->name('resume.')->group(function() {
    Route::get('/', [ResumeController::class, 'index'])->name('index');
    Route::get('/experience', [ResumeController::class, 'experience'])->name('experience');
    Route::get('/education', [ResumeController::class, 'education'])->name('education');
    Route::get('/skills', [ResumeController::class, 'skills'])->name('skills');
    Route::get('/interests', [ResumeController::class, 'interests'])->name('interests');
    Route::get('/awards', [ResumeController::class, 'awards'])->name('awards');
});


Route::get('form1', [FormsController::class, 'form1'])->name('form1');
Route::post('form1', [FormsController::class, 'form1_data'])->name('form1_data');

Route::get('form2', [FormsController::class, 'form2'])->name('form2');
Route::post('form2', [FormsController::class, 'form2_data'])->name('form2_data');
