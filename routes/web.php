<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\TeamMemberController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\PricingController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\Front\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home_1'])->name('home_1');
Route::get('/home-2', [HomeController::class, 'home_2'])->name('home_2');
Route::get('/home-3', [HomeController::class, 'home_3'])->name('home_3');
Route::get('/home-4', [HomeController::class, 'home_4'])->name('home_4');
Route::get('/home-5', [HomeController::class, 'home_5'])->name('home_5');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('/team-members', [TeamMemberController::class, 'team_members'])->name('team_members');
Route::get('/team-member/{slug}', [TeamMemberController::class, 'team_member'])->name('team_member');
Route::post('/team-member/send-email', [TeamMemberController::class, 'team_member_send_email'])->name('team_member_send_email');

Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/service/{slug}', [ServiceController::class, 'service'])->name('service');

Route::get('/portfolios', [PortfolioController::class, 'portfolios'])->name('portfolios');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'portfolio'])->name('portfolio');

Route::get('/blog', [PostController::class, 'blog'])->name('blog');
Route::get('/post/{slug}', [PostController::class, 'post'])->name('post');
Route::get('/category/{slug}', [PostController::class, 'post_by_category'])->name('post_by_category');
Route::get('/tag/{tag_name}', [PostController::class, 'post_by_tag'])->name('post_by_tag');
Route::get('/search', [PostController::class, 'search'])->name('search');
Route::post('/comment-store', [PostController::class, 'comment_store'])->name('comment_store');
Route::post('/reply-store', [PostController::class, 'reply_store'])->name('reply_store');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/product/{slug}', [ProductController::class, 'product'])->name('product');

// Route::get('/secret', [HomeController::class, 'secret'])->name('secret')->middleware(['auth','password.confirm']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])
->prefix('user')
->as('user.')
->group(function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('profile', [UserController::class, 'profile_update'])->name('profile.update');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
