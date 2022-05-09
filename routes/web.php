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
use App\Http\Controllers\Auths\RegisterController;
use App\Http\Controllers\UserProfileController;
use App\Models\Form;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/users/{user:nickname}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('edit/{id}',[AdminController::class,'editRole']);
Route::post('edit',[AdminController::class,'UpdateRole']);


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

Route::get('/teams',[TeamController::class,'show'])->name('teams');
//Route::get('edit/{id}',[TeamController::class,'editRole']);
//Route::post('edit',[TeamController::class,'UpdateRole']);

Route::get('/userForm', function(){
    return view('userForm');
});
Route::post('/userForm', function(){
    Form::create([
        'vardas' => request('vardas'),
        'pavarde' => request('pavarde'),
        'el_Pastas' => request('el_Pastas'),
        'gimimo_Data' => request('gimimo_Data'),
        'gimimo_Miestas' => request('gimimo_Miestas'),
        'trys_Zodziai' => request('trys_Zodziai'),
        'pomegiai' => request('pomegiai'),
        'auto_Marke' => request('auto_Marke'),
        'muzikos_Zanras' => request('muzikos_Zanras'),
        'filmas' => request('filmas'),
        'didziausia_Baime' => request('didziausia_Baime'),
        'salis_Aplankyti' => request('salis_Aplankyti'),
        'kreiptis_galima' => request('kreiptis_galima'),
    ]);
    return redirect('userForm');
});