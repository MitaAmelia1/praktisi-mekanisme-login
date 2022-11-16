<?php
use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

Auth::routes();

// untuk verifikasi email user
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' =>['logincheck:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function (){
        Route::resource('editor', EditoController::class);
    });
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/mita amelia', function () {
    return view('mita amelia');
});
Route::get('/produk2', [ProdukController::class,'index2']);

Route::get('/show',[ProdukController::class,'show']);

Route::get('/show/{id}', function
($id) { echo "Nilai Parameter
Adalah ".$id; });

Route::get('/edit/{Mita}', function ($nama) {
    echo "Nilai Parameter Adalah ".$nama; })->where('Mita','[A-Za-z]+'); 

Route::get('/index', function () {
    echo "<a href='".route('create')."'>Akses Route dengan nama </a>"; });
        
Route::get('/create', function () {
    echo "Route diakses menggunakan nama"; })->name('create');

Route::get('/Produk',[ProdukController::class,'index']);

Route::get('/home',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);