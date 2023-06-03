<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Basic\LangController;
use App\Http\Controllers\Admin\Basic\ContactController;
use App\Http\Controllers\Admin\Basic\AboutController;
use App\Http\Controllers\Admin\Request\RequestController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\User\SettingController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Banner\BannerController;
use App\Http\Controllers\admin\Links\LinkController;
use App\Http\Controllers\Admin\Characteristic\CharacteristicController;

use App\Http\Controllers\Site\Home\HomeController;
use App\Http\Controllers\Site\Product\ProductController as SiteProductController;
use App\Http\Controllers\Site\About\AboutController as SiteAboutController;
use App\Http\Controllers\Site\Contact\ContactController as SiteContactController;

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


// Site routes
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'siteVisits']
    ], function () {

    Route::name('site.')->group(function() {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::get('/about', [SiteAboutController::class, 'index'])->name('about');
        Route::get('/contacts', [SiteContactController::class, 'index'])->name('contact');
        Route::get('/products', [SiteProductController::class, 'index'])->name('products');
        Route::get('/product/{id}', [SiteProductController::class, 'show'])->name('product');
        Route::get('/search', [HomeController::class, 'searchData'])->name('search');
    });
});

// Admin routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin', function () {
    return redirect('admin/home');
});
Route::prefix('/admin')->name('admin.')->middleware('role:admin')->group(function() {

    Route::get('/home', [DashboardController::class, 'index'])->name('index');

    Route::get('setting/edit',[SettingController::class, 'edit'])->name('setting.edit');
    Route::post('setting/update',[SettingController::class, 'update'])->name('setting.update');

    // Languages
    Route::prefix('languages')->name('language.')->group(function(){
        Route::get('/index', [LangController::class, 'index'])->name('index');
        Route::get('/show/{lang}', [LangController::class, 'show'])->name('show');
        Route::get('/edit/{lang}', [LangController::class, 'edit'])->name('edit');
        Route::get('/create', [LangController::class, 'create'])->name('create');
        Route::post('/store', [LangController::class, 'store'])->name('store');
        Route::post('/update/{lang}', [LangController::class, 'update'])->name('update');
    });

    // Contacts
    Route::prefix('contacts')->name('contact.')->group(function(){
        Route::get('/index', [ContactController::class, 'index'])->name('index');
        Route::get('/edit/{contact}', [ContactController::class, 'edit'])->name('edit');
        Route::post('/store', [ContactController::class, 'store'])->name('store');
        Route::post('/update/{contact}', [ContactController::class, 'update'])->name('update');
    });

    // Banners
    Route::prefix('banners')->name('banner.')->group(function(){
        Route::get('/index', [BannerController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('edit');
        Route::get('/create', [BannerController::class, 'create'])->name('create');
        Route::post('/destroy/{id}', [BannerController::class, 'destroy'])->name('destroy');
        Route::post('/store', [BannerController::class, 'store'])->name('store');
        Route::put('/update/{id}', [BannerController::class, 'update'])->name('update');
    });

    // Products
    Route::prefix('products')->name('product.')->group(function(){
        Route::get('/index', [ProductController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::post('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    });

    // Characteristics
    Route::prefix('characteristics')->name('characteristic.')->group(function(){
        Route::get('/index', [CharacteristicController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [CharacteristicController::class, 'edit'])->name('edit');
        Route::get('/create', [CharacteristicController::class, 'create'])->name('create');
        Route::post('/store', [CharacteristicController::class, 'store'])->name('store');
        Route::put('/update/{id}', [CharacteristicController::class, 'update'])->name('update');
    });

    // links
    Route::prefix('links')->name('link.')->group(function(){
        Route::get('/index', [LinkController::class, 'index'])->name('index');
        Route::get('/edit/{link}', [LinkController::class, 'edit'])->name('edit');
        Route::get('/create', [LinkController::class, 'create'])->name('create');
        Route::post('/store', [LinkController::class, 'store'])->name('store');
        Route::post('/update/{link}', [LinkController::class, 'update'])->name('update');
    });
    // About
    Route::prefix('about')->name('about.')->group(function(){
        Route::get('/index', [AboutController::class, 'index'])->name('index');
        Route::get('/edit', [AboutController::class, 'edit'])->name('edit');
        Route::post('/update', [AboutController::class, 'update'])->name('update');
    });

    // Requests
    Route::prefix('requests')->name('request.')->group(function(){
        Route::get('/index', [RequestController::class, 'index'])->name('index');
        Route::get('/show/{request}', [RequestController::class, 'show'])->name('show');
    });
});
