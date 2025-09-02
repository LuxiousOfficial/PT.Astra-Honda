<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DealerController;
use App\Models\Karir;
use App\Models\Release;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HrdKreditController;
use App\Http\Controllers\HrdPelamarController;
use App\Http\Controllers\HrdServiceController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\UserController;
use App\Models\Dealer;
use App\Models\Kredit;
use App\Models\Service;

Route::get('/', function () {
    return view('home', ['releases' => Release::latest('id')->paginate('6')]);
});

Route::get('/matic', function () {
    return view('matic');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/cub', function () {
    return view('cub');
});

Route::get('/ev', function () {
    return view('ev');
});

Route::get('/products/beat', function () {
    return view('products/beat');
});

Route::get('/products/beatstreet', function () {
    return view('products/beatstreet');
});

Route::get('/products/genio', function () {
    return view('products/genio');
});

Route::get('/products/scoopy', function () {
    return view('products/scoopy');
});

Route::get('/products/pcx', function () {
    return view('products/pcx');
});

Route::get('/products/vario125', function () {
    return view('products/vario125');
});

Route::get('/products/vario160', function () {
    return view('products/vario160');
});

Route::get('/products/stylo160', function () {
    return view('products/stylo160');
});

Route::get('/products/adv160', function () {
    return view('products/adv160');
});

Route::get('/products/forza', function () {
    return view('products/forza');
});

Route::get('/products/verza', function () {
    return view('products/verza');
});

Route::get('/products/sonic', function () {
    return view('products/sonic');
});

Route::get('/products/streetfire', function () {
    return view('products/streetfire');
});

Route::get('/products/cbx150', function () {
    return view('products/cbx150');
});

Route::get('/products/crf150l', function () {
    return view('products/crf150l');
});

Route::get('/products/cbr150', function () {
    return view('products/cbr150');
});

Route::get('/products/cbr250', function () {
    return view('products/cbr250');
});

Route::get('/products/crf250l', function () {
    return view('products/crf250l');
});

Route::get('/products/st125dax', function () {
    return view('products/st125dax');
});

Route::get('/products/monkey', function () {
    return view('products/monkey');
});

Route::get('/products/crf250rally', function () {
    return view('products/crf250rally');
});

Route::get('/products/suprax125', function () {
    return view('products/suprax125');
});

Route::get('/products/gtr150', function () {
    return view('products/gtr150');
});

Route::get('/products/supercub125', function () {
    return view('products/supercub125');
});

Route::get('/products/ct125', function () {
    return view('products/ct125');
});

Route::get('/products/revo', function () {
    return view('products/revo');
});

Route::get('/products/em1', function () {
    return view('products/em1');
});

Route::get('/products/icon', function () {
    return view('products/icon');
});

Route::get('/products/cuv', function () {
    return view('products/cuv');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/corporate', function () {
    return view('corporate');
});

Route::get('/racing', function () {
    return view('racing');
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/dealer', function () {
    return view('dealer', ['dealers' => Dealer::filter(request(['search']))->latest('id')->paginate(6)]);
});

Route::get('/releases', function () {
    // $releases = Release::latest()->paginate(5);
    return view('releases', ['releases' => Release::filter(request(['search']))->latest('id')->paginate(9)]);
});

Route::get('/releases/{release:slug}', function (Release $release) {
    return view('release', ['title' => 'Single Post', 'release' => $release]);
});

Route::get('/karirs', function () {
    return view('karirs', ['karirs' => Karir::filter()->latest('id')->get()]);
});

Route::get('/karirs/{karir:slug}', function (Karir $karir) {

    return view('karir', ['karir' => $karir]);
});

Route::get('/astra', function() { return view('astra.index');})->middleware('can:index');

Route::resource('/astra/pelamar', PelamarController::class)->middleware('auth');

Route::resource('/astra/service', ServiceController::class)->middleware('guest');

Route::resource('/astra/kredit', KreditController::class)->middleware('guest');

Route::get('/search', [SearchController::class, 'search']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->middleware('guest')
->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgot'])->middleware('guest')
->name('password.email');

Route::get('/reset-password', [ResetPasswordController::class, 'index'])->middleware('guest');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'reset'])->middleware('guest')
->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->middleware('guest')
->name('password.update');

// Route::get('/dashboardhrdastrahonda', function() {
//     return view('dashboardhrdastrahonda.index', [DashboardController::class, 'creadits']);
// })->middleware('Admin');

Route::get('/dashboardhrdastrahonda', [DashboardController::class, 'index'])->middleware(['auth', 'Admin']);

Route::resource('/dashboardhrdastrahonda/kredit', HrdKreditController::class)->middleware(['auth', 'Admin']);
Route::get('/dashboardhrdastrahonda/kredit/', [SearchController::class, 'kredit'])->middleware(['auth', 'Admin']);

Route::resource('/dashboardhrdastrahonda/service', HrdServiceController::class)->middleware(['auth', 'Admin']);
Route::get('/dashboardhrdastrahonda/service/', [SearchController::class, 'service'])->middleware(['auth', 'Admin']);

Route::resource('/dashboardhrdastrahonda/dealer', DealerController::class)->middleware(['auth', 'Admin']);
Route::get('/dashboardhrdastrahonda/dealer/', [SearchController::class, 'dealer'])->middleware(['auth', 'Admin']);

Route::resource('/dashboardhrdastrahonda/karir', KarirController::class)->middleware(['auth', 'Admin']);
Route::get('/dashboardhrdastrahonda/karir/', [SearchController::class, 'karir'])->middleware(['auth', 'Admin']);

Route::resource('/dashboardhrdastrahonda/pelamar', HrdPelamarController::class)->middleware(['auth', 'Admin']);
Route::get('/dashboardhrdastrahonda/pelamar/', [SearchController::class, 'pelamar'])->middleware(['auth', 'Admin']);

Route::resource('/dashboardhrdastrahonda/user', UserController::class)->middleware(['auth', 'Developer']);
Route::get('/dashboardhrdastrahonda/user/', [SearchController::class, 'user'])->middleware(['auth', 'Developer']);


