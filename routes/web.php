<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;
use App\Http\Controllers\User;
use App\Http\Controllers\Auth\PasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Site\HomeController::class, 'index'])->name('site.home');
Route::get('/faq', [Site\PageController::class, 'faq'])->name('site.faq');
Route::get('/about', [Site\PageController::class, 'about'])->name('site.about');
Route::get('/contact-us', [Site\PageController::class, 'contact'])->name('site.contact');
Route::get('/services/cryptocurrency', [Site\PageController::class, 'cryptocurrency'])->name('site.cryptocurrency');
Route::get('/services/cryptomining', [Site\PageController::class, 'cryptomining'])->name('site.cryptomining');
Route::get('/services/realestate', [Site\PageController::class, 'realestate'])->name('site.realestate');
Route::get('/services/forexstock', [Site\PageController::class, 'forexstock'])->name('site.forexstock');
Route::get('/terms', [Site\PageController::class, 'terms'])->name('site.terms');
Route::get('/privacy', [Site\PageController::class, 'privacy'])->name('site.privacy');

Route::prefix('account')->middleware(['auth', 'verified'])->group(function(){

    Route::middleware(['userForceUpgrade'])->group(function () {
        Route::get('home', [User\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('trade', User\TradeController::class)->names([
            'create' => 'trade.create',
            'store' => 'trade.store',
        ]);
        
        Route::get('history', [User\AccountController::class, 'history'])->name('history');
        Route::get('transactions', [User\AccountController::class, 'transactions'])->name('transactions');
        Route::get('news', [User\AccountController::class, 'news'])->name('news');
        
        
    
        Route::get('withdraw', [User\WithdrawalController::class, 'index'])->name('withdraw.index');
        Route::post('withdraw', [User\WithdrawalController::class, 'store'])->name('withdraw.store');
    
        Route::get('technical', [User\AccountController::class, 'technical'])->name('technical');
        Route::get('chart', [User\AccountController::class, 'chart'])->name('chart');
        Route::get('calendar', [User\AccountController::class, 'calendar'])->name('calendar');
    });
    Route::resource('deposit', User\DepositController::class)->names([
        'create' => 'deposit.create',
        'store' => 'deposit.store',
    ]);
    Route::get('purchase', [User\PurchaseController::class, 'create'])->name('purchase.create');
    Route::post('purchase/signal', [User\PurchaseController::class, 'store'])->name('purchase.signal');
    Route::get('purchase/signal', [User\PurchaseController::class, 'create'])->name('purchase.signal.reloaded');
    Route::post('purchase/signal/store', [User\PurchaseController::class, 'storesignal'])->name('deposit.signal.store');
    Route::post('purchase/upgrade', [User\PurchaseController::class, 'upgrade'])->name('purchase.upgrade');
    Route::get('settings', [User\AccountController::class, 'settings'])->name('settings');
    Route::post('settings/password/change', [User\AccountController::class, 'update'])->name('password.change');
    
});

  


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/image', [ProfileController::class, 'image'])->name('profile.image');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
