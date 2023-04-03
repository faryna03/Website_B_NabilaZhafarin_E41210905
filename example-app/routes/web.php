<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Frontend\HomeController;
// use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/nabila', function () {
//     return 'ohayou';
// });

// Acara 5
// Route::get('/foo', function () {
//     return 'hello world';
// });
//akan menampilkan tulisan hello world

//akan mengarahkan pada eror userController@index

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::option($uri, $callback);
//sepertinya akan memanggil kembali

// Route::match(['get', 'post'], '/', function () {
    
// });
//sepertinya mengambil dan mengirim data(?)

// Route::any('/', function ($id) {
    
// });
//sepertinya menampilkan halaman eror.

// CSRF Protection
// <form method="POST" action="/profile">
//     @csrf
//     ...
// </form>
//belum paham

// Redirect route
// Route::redirect('/here', '/there', 301);
// Route::permanentRedirect('/here', '/there'); 
//Akan mengalihkan pada domain /there

//Route View
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
// //menampilkan(?)

//acara 6
//parameter opsional
// Route::get('users/{name?}', function ($name = null) {
//     return $name;
    
// });

// Route::get('users/{name?}', function ($name = 'John') {
//     return $name;
    
// });
//akan menampilkan tulisan sesuai nama yang di tulis

//regular expression constraints
// Route::get('users/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');
// //hanya akan menampilkan huruf apa saja yang tertulis pada URL

// Route::get('users/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');
// //hanya akan menampilkan semua angka yang tertulis pada URL

// Route::get('users/{id}/{name}', function ($id, $name) {
//     return [$id, $name];
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//akan menampilkan huruf kecil dan angka yang telah tertulis pada URL, 
//tetapi jika pada URL ada angka dan huruf kapital maka akan muncul not found 404

//Global Constraints
// public function boot()
// {
//     $router->pattern('id', '[0-9]+');

//     parent::boot();
// }
// Route::get('users/{id}', function ($id) {
//     //
// });

// Encoded Forward Slashes
// Route::get('search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');
//Akan dapat menampilkan simbol karakter istimewa, kecuali #.

//Acara 7
//Generate URL ke route bernama
// $url = route('profile'); //Generating URL
// return redirect->route('profile');//Generating Redirect

// Route::get('user/{id}/profile', function ($id) {
//     // return $id;
// })->name('profile');
// $url = route('profile', ['id' => 1]);
// $url = route('profile', ['id' => 1, 'photos' => 'yes']);

//Memeriksa route saat ini
// public function handle($request, Closure $next) {
//     if($request->route()->named('profile')) {
//         //
//     }
//     return $next($request);
// }

// Acara 8
//Middleware
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // return [$first, $second];
//     });
//     Route::get('users/profile', function () {
//         // return [$first, $second];
//     });
// });

// Namespaces
// Route::namespace('Admin')->group(function(){
//     // 
// });
// akan mengarahkan apda domain khusus bernama admin

// subdomain routing
// Route::domain('{account}.myapp.com')->group(function(){
//     Route::get('users/{id}', function ($account, $id) {
//         // 
//     });
// });

// // Route Prefixes
// Route::prefix('admin')->group(function (){
//     Route::get('users', function () {
//         // "/admin/users" url
//     });
// });
// akan menampilkan halaman khusus admin

// Route name prefixes
// Route::name('admin.')->group(function (){
//     Route::get('users', function () {
//         // 
//     })->name('users');
// });

// Route::resource('user', ManagementUserController::class);

// Route::get('/home', [ManagementUserController::class, 'index']);

// Route::get('/home', function(){
//     return view("home");
// });
// Route::group(['namespace'=> 'Frontend'], function(){
//     Route::get('/home', [HomeController::class, 'index']);
// });

Route::get('dashboard', [DashboardController::class, 'index']); //memunculkan blade templte admin 
// Route:: group(['namespace' => 'Backend'], function () {
    
// });
?>