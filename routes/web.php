<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Basic\LangController;
use App\Http\Controllers\Admin\Basic\ContactController;
use App\Http\Controllers\Admin\Basic\AboutController;
use App\Http\Controllers\Admin\Article\ArticleCategoryController;
use App\Http\Controllers\Admin\Regulation\RegulationCategoryController;
use App\Http\Controllers\Admin\Regulation\RegulationController;
use App\Http\Controllers\Admin\Article\ArticleController;
use App\Http\Controllers\Admin\Faq\QuestionAnswerController;
use App\Http\Controllers\Admin\Request\RequestController;
use App\Http\Controllers\Admin\Project\ProjectController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\User\SettingController;

use App\Http\Controllers\Site\Home\HomeController;
use App\Http\Controllers\Site\About\AboutController as SiteAboutController;
use App\Http\Controllers\Site\Article\ArticleController as SiteArticleController;
use App\Http\Controllers\Site\Regulation\RegulationController as SiteRegulationController;
use App\Http\Controllers\Site\Contact\ContactController as SiteContactController;
use App\Http\Controllers\Site\Faq\FaqController;
use App\Http\Controllers\Site\Project\ProjectController as SiteProjectController;

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
        Route::get('/news', [SiteArticleController::class, 'index'])->name('news');
        Route::get('/news/{category}', [SiteArticleController::class, 'categoryArticle'])->name('news-category');
        Route::get('/news/show/{article}', [SiteArticleController::class, 'show'])->name('news-show');
        Route::get('/regulations', [SiteRegulationController::class, 'index'])->name('regulation');
        Route::get('/regulations/show/{regulation}', [SiteRegulationController::class, 'downloadDocument'])->name('regulation-show');
        Route::get('/contacts', [SiteContactController::class, 'index'])->name('contact');
        Route::post('/feedback/store', [SiteContactController::class, 'storeFeedback'])->name('feedback-store');
        Route::get('/faq', [FaqController::class, 'index'])->name('faq');
        Route::get('/project/{project}', [SiteProjectController::class, 'show'])->name('project.show');
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

    // Faq
    Route::prefix('faq')->name('faq.')->group(function(){
        Route::get('/index', [QuestionAnswerController::class, 'index'])->name('index');
        Route::get('/edit/{question}', [QuestionAnswerController::class, 'edit'])->name('edit');
        Route::post('/update/{question}', [QuestionAnswerController::class, 'update'])->name('update');
        Route::get('/create', [QuestionAnswerController::class, 'create'])->name('create');
        Route::post('/store', [QuestionAnswerController::class, 'store'])->name('store');
    });

    // Article Categories
    Route::prefix('article-categories')->name('article-category.')->group(function(){
        Route::get('/index', [ArticleCategoryController::class, 'index'])->name('index');
        Route::get('/edit/{category_id}', [ArticleCategoryController::class, 'edit'])->name('edit');
        Route::post('/update', [ArticleCategoryController::class, 'update'])->name('update');
        Route::post('/store', [ArticleCategoryController::class, 'store'])->name('store');
    });

    // Article
    Route::prefix('articles')->name('article.')->group(function(){
        Route::get('/index', [ArticleController::class, 'index'])->name('index');
        Route::get('/create', [ArticleController::class, 'create'])->name('create');
        Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
        Route::post('/update/{article}', [ArticleController::class, 'update'])->name('update');
        Route::post('/store', [ArticleController::class, 'store'])->name('store');
    });

    // Regulation Categories
    Route::prefix('regulation-categories')->name('regulation-category.')->group(function(){
        Route::get('/index', [RegulationCategoryController::class, 'index'])->name('index');
        Route::get('/edit/{category_id}', [RegulationCategoryController::class, 'edit'])->name('edit');
        Route::post('/update', [RegulationCategoryController::class, 'update'])->name('update');
        Route::post('/store', [RegulationCategoryController::class, 'store'])->name('store');
    });

    // Regulation
    Route::prefix('regulations')->name('regulation.')->group(function(){
        Route::get('/index', [RegulationController::class, 'index'])->name('index');
        Route::get('/create', [RegulationController::class, 'create'])->name('create');
        Route::get('/edit/{regulation}', [RegulationController::class, 'edit'])->name('edit');
        Route::post('/update/{regulation}', [RegulationController::class, 'update'])->name('update');
        Route::post('/store', [RegulationController::class, 'store'])->name('store');
    });

    // Projects
    Route::prefix('projects')->name('project.')->group(function(){
        Route::get('/index', [ProjectController::class, 'index'])->name('index');

        Route::get('/create', [ProjectController::class, 'create'])->name('create');
        Route::get('/create/description/{project}', [ProjectController::class, 'createDescription'])->name('create-description');
        Route::get('/create/infographic/{project}', [ProjectController::class, 'createInfographic'])->name('create-infographic');
        Route::get('/create/event/{project}', [ProjectController::class, 'createEvent'])->name('create-event');

        Route::post('/store', [ProjectController::class, 'store'])->name('store');
        Route::post('/store/description/{project}', [ProjectController::class, 'storeDescription'])->name('store-description');
        Route::post('/store/infographic/{project}', [ProjectController::class, 'storeInfographic'])->name('store-infographic');
        Route::post('/store/event/{project}', [ProjectController::class, 'storeEvent'])->name('store-event');

        Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('edit');
        Route::get('/edit/description/{project}', [ProjectController::class, 'editDescription'])->name('edit-description');
        Route::get('/edit/infographic/{project}', [ProjectController::class, 'editInfographic'])->name('edit-infographic');
        Route::get('/edit/event/{project}', [ProjectController::class, 'editEvent'])->name('edit-event');

        Route::post('/update/{project}', [ProjectController::class, 'update'])->name('update');
        Route::post('/update/description/{description}', [ProjectController::class, 'updateDescription'])->name('update-description');
        Route::post('/update/infographic/{infographic}', [ProjectController::class, 'updateInfographic'])->name('update-infographic');
        Route::post('/update/event/{event}', [ProjectController::class, 'updateEvent'])->name('update-event');
    });
});
