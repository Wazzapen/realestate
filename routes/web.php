<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

//User Frontend All Route
Route::get('/', [UserController::class, 'Index']); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//AdminGroup Middleware
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class, 'AdminProfileUpdate'])->name('admin.profile.update');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    
    Route::post('/admin/profile/update', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password'); 
}); //End grtoup admin 
//Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin-dashboard');



//Agent Group Middleware   
Route::middleware(['auth','role:agent'])->group(function(){
    
    Route::get('/agent/dashboard', [AdminController::class, 'AgentDashboard'])->name('agent-dashboard');

});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
