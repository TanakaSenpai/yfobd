<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\AdminPagesController;
use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\auth\RegisterController;
use App\Http\Controllers\admin\AdminPostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProjectsController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('management', [PagesController::class, 'management'])->name('management');

Route::get('projects', [ProjectsController::class, 'projects'])->name('projects');

Route::get('see-project/{project}', [ProjectsController::class, 'see_project'])->name('see-project');

Route::get('bhrau', [PagesController::class, 'bhrau'])->name('bhrau');

Route::get('join-now', [PagesController::class, 'joinNow'])->name('joinNow');

Route::get('about-us', [PagesController::class, 'aboutUs'])->name('about-us');

Route::get('donate-now', [PagesController::class, 'donateNow'])->name('donateNow');

Route::get('presidents-message', [PagesController::class, 'presidentsMessage'])->name('presidents-message');

Route::get('news-updates', [PagesController::class, 'newsUpdates'])->name('news-updates');

Route::get('more-topics', [PagesController::class, 'moreTopics'])->name('moreTopics');

Route::get('see-post', [PostsController::class, 'index'])->name('showPost');


Route::middleware(['guest'])->group(function () {
    Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('admin/login/check', [LoginController::class, 'login'])->name('admin.login.check');

    // Route::get('admin/register', [RegisterController::class, 'index'])->name('admin.register');
    // Route::post('admin/register/store', [RegisterController::class, 'store'])->name('admin.register.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('admin', [AdminPagesController::class, 'index'])->name('admin.dashboard');

    Route::get('admin/categories', [CategoriesController::class, 'categories'])->name('admin.categories.show');
    Route::get('admin/categories/add-category', [CategoriesController::class, 'cat_add'])->name('admin.categories.add');
    Route::post('admin/categories/category-store', [CategoriesController::class, 'cat_store'])->name('admin.category.add.store');
    Route::get('admin/categories/edit/{id}', [CategoriesController::class, 'cat_edit'])->name('admin.category.edit');
    Route::post('admin/categories/update/{id}', [CategoriesController::class, 'cat_update'])->name('admin.category.edit.store');
    Route::delete('admin/categories/delete/{id}', [CategoriesController::class, 'cat_del'])->name('admin.category.delete');

    Route::get('admin/posts', [AdminPostsController::class, 'index'])->name('admin.posts.show');
    Route::get('admin/add-posts', [AdminPostsController::class, 'posts'])->name('admin.posts.add');
    Route::post('admin/posts/store', [AdminPostsController::class, 'store'])->name('admin.posts.store');
    Route::get('admin/edit-posts/{id}', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
    Route::post('admin/edit-posts/update/{id}', [AdminPostsController::class, 'update_post'])->name('admin.posts.update');
    Route::delete('admin/posts/delete/{id}', [AdminPostsController::class, 'delete_post'])->name('admin.posts.delete');
});
