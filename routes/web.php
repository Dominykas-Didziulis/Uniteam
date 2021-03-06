<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\addTeam;

Route::get('/', [HomeController::class,'index'] )->name('home');//todo change to controller mby will work. Kieno cia ideja ?

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/users/{user:nickname}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/update',[LoginController::class,'getUsersCredentials'])->name('user.update');
Route::post('/update',[LoginController::class,'setUsersCredentials']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

Route::get('/admin',[AdminController::class,'show'])->name('admin');
Route::get('editrole/{id}',[AdminController::class,'editRole']);
Route::post('edit',[AdminController::class,'UpdateRole']);

Route::get('/about', function () {return view('about');})->name('about');
Route::get('/viktorina', function () {return view('quiz');})->name('quiz');
Route::get('/game', function () {return view('game');})->name('game');
Route::get('/prisesk', function () {return view('sit');})->name('sit');

Route::get('/atspek', function () {return view('guesswho');})->name('guesswho');
Route::get('/team',[TeamController::class,'show'])->name('team');
//Route::get('edit/{id}',[TeamController::class,'editRole']);
//Route::post('edit',[TeamController::class,'UpdateRole']);



//Route::get('/userForm', [UserFormController::class, 'index'])->name('userForm');
Route::get('userForm/{user_id}',[UserFormController::class,'editUserForm']);
Route::post('edituserform',[UserFormController::class,'UpdateUserForm']);
//Route::post('/userForm', [UserFormController::class, 'store']);

Route::get('/creatTeam', function () {
    return view('creatTeam');
});
Route::get('/profile',[UserFormController::class,'show'])->name('profile');
//Route::get('/profile', function () {return view('profile');});
Route::view('teams', 'addTeam');
Route::post('/submit', [addTeam::class, 'save']);
