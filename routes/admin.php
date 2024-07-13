<?php

use App\Http\Controllers\Admin;


Route::get('/admin/register', [Admin\RegisterController::class, 'create'])->name('admin.register.create');
Route::post('/admin/register', [Admin\RegisterController::class, 'store'])->name('admin.register.store');
Route::get('/admin/login', [Admin\LoginController::class, 'create'])->name('admin.login.create');
Route::post('/admin/login', [Admin\LoginController::class, 'store'])->name('admin.login.store');


Route::prefix('admin')->middleware(['adminAuth', 'verifiedAdmin'])->group(function(){
    Route::get('home', [ Admin\HomeController::class, 'index'])->name('admin.home');
    Route::resource('plan', Admin\PlanController::class)->names([
        'index' => 'admin.plan.index',
        'create' => 'admin.plan.create',
        'store' => 'admin.plan.store',
        'destroy' => 'admin.plan.delete',
    ]);

    Route::get('user', [Admin\UserController::class, 'index'])->name('admin.users.index');
    Route::get('user/delete/{id}', [Admin\UserController::class, 'show'])->name('admin.users.destroy');
    Route::get('user/edit/{id}', [Admin\UserController::class, 'edit' ])->name('admin.users.edit');
    Route::get('user/create/{id}', [Admin\UserController::class, 'create'])->name( 'admin.users.activate');


    Route::get('password', [ Admin\HomeController::class, 'password'])->name('admin.password');
    Route::post('password', [ Admin\HomeController::class, 'updatepassword'])->name('admin.password.update');

    Route::get('wallet', [ Admin\HomeController::class, 'account'])->name('admin.wallet');
    Route::post('wallet', [ Admin\HomeController::class, 'storeaccount'])->name('admin.wallet.store');
    
    Route::get('deposit', [Admin\DepositController::class, 'index'])->name('admin.deposit.index');
    Route::get('deposit/reverse/{id}', [Admin\DepositController::class, 'reverse'])->name('admin.reverse.index');
    Route::get('pending/deposit', [Admin\DepositController::class, 'show'])->name('admin.deposit');
    Route::get('pending/deposit/create/{pending_id}', [Admin\DepositController::class, 'create'])->name('admin.deposit.create');
    Route::post('pending/deposit/approve', [Admin\DepositController::class, 'approve'])->name('admin.deposit.approve');
    Route::get('pending/deposit/restrict/{pending_id}', [Admin\DepositController::class, 'restrict'])->name('admin.deposit.restrict');
    
    Route::get('pending/signal', [Admin\DepositController::class, 'signal'])->name('admin.deposit.signal');
    Route::get('pending/signal/{pending_id}', [Admin\DepositController::class, 'storesignal'])->name('admin.deposit.signal.store');
    

    Route::get('deduction', [Admin\DepositController::class, 'deduct'])->name('admin.deposit.deduct');
    Route::post('deduction', [Admin\DepositController::class, 'depositupdate'])->name('admin.depoit.update');

    Route::get('bonus', [Admin\DepositController::class, 'bonus'])->name('admin.bonus');
    Route::post('bonus', [Admin\DepositController::class, 'addbonus'])->name('admin.bonus.update');
    
    Route::post('logout', [ Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::get('withdraw', [Admin\WithdrawalController::class, 'index'])->name('admin.withdraw.index');
    Route::get('withdraw/create/{withdrawal_id?}', [Admin\WithdrawalController::class, 'create'])->name('admin.withdraw.create');
    Route::post('withdraw/pay', [Admin\WithdrawalController::class, 'store'])->name('admin.withdraw.store');
});

