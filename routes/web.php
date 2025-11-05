<?php

use App\Http\Controllers\DashboarPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/blog', function () {
    $posts = Post::latest()->filter(request('keyword'))->paginate(6);
    return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {
    $posts = $user->posts()->filter(request('keyword'))->get();
    return view('author', ['title' => 'Posts By ' . $user->name, 'posts' => $posts, 'author' => $user]);
});

Route::get('/categories', function () {
    $categories = Category::all();
    return view('categories', ['title' => 'Category Page', 'categories' => $categories]);
});

Route::get('/single-category/{category:slug}', function (Category $category) {
    $posts = $category->posts()->filter(request('keyword'))->get();
    return view('singel-category', ['title' => 'Category Page', 'category' => $category, 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/dashboard', [DashboarPostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/create', [DashboarPostController::class, 'create'])->middleware(['auth', 'verified']);

Route::get('/dashboard/{post:slug}', [DashboarPostController::class, 'show'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
