<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\PropertyController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\RoleController;
 
use App\Http\Controllers\Agent\AgentPropertyController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CompareController;

// Route::get('/', function () {
//     return view('welcome');
// });

//User Frontend All Route
Route::get('/', [UserController::class, 'Index']); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/user/profile', [UserController::class, 'UserProfileUpdate'])->name('user.profile.update');

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');

    Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');

    Route::get('/user/schedule/request', [UserController::class, 'UserScheduleRequest'])->name('user.schedule.request'); 
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

//AdminGroup Middleware
Route::middleware(['auth','role:admin'])->group(function(){

    
//Property Type ALl Route
    Route::controller(PropertyTypeController::class)->group(function(){
        Route::get('/all/type', 'Alltype')->name('all.type');

    });
   
});