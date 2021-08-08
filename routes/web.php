<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlatController;
use App\Http\Controllers\CommandController;

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


Route::resource('plat', PlatController::class);
Route::resource('command', CommandController::class);
// Route::get('/', function () {
//     return view('users.accuiel');
// });

Route::get('command/update/{id}/{status}', [App\Http\Controllers\OrderController::class, 'update']);

Route::get('/plati', function () {
    return view('users.platinfos');
});
Route::get('/chef/platdetails/{id}', [App\Http\Controllers\PlatController::class, 'edit'])->name('chef-plat');
Route::get('/user/platdetails/{id}', [App\Http\Controllers\PlatController::class, 'show'])->name('user-plat');
Route::get('/chef/supplat/{id}', [App\Http\Controllers\PlatController::class, 'destroy'])->name('chef-plat_sup');

// Route::get('/profilchef', function () {
//     return view('chefs.chefInformations');
// });

Route::get('/profilchef', [App\Http\Controllers\ChefController::class, 'show'])->middleware('auth');
Route::get('/noschefs', [App\Http\Controllers\ChefController::class, 'index']);
Route::post('/upprofilchef', [App\Http\Controllers\ChefController::class, 'updat'])->name('upchef');
Route::post('/registerchef', [App\Http\Controllers\ChefController::class, 'store'])->name('registerchef');

Route::get('/', [PlatController::class, 'afficher']);
Route::get('panier', [App\Http\Controllers\CartController::class, 'cart'])->name('panier');
Route::get('wish', [App\Http\Controllers\WishController::class, 'index'])->name('wish');
Route::get('panierData', [App\Http\Controllers\CartController::class, 'panierData'])->name('panierData');
Route::get('wishesData', [App\Http\Controllers\WishController::class, 'wishesData'])->name('wishesData');
Route::post('/addcart', [App\Http\Controllers\CartController::class, 'addToCart']);
Route::get('/total', [App\Http\Controllers\CartController::class, 'total']);
Route::get('/savecommand', [App\Http\Controllers\CommandController::class, 'storecommand']);
Route::post('/contact-store', [App\Http\Controllers\ContactController::class, 'store']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update'])->name('update.cart');
Route::delete('remove-cart', [App\Http\Controllers\CartController::class, 'remove']);
// Route::delete('remove-wish', [App\Http\Controllers\WishController::class, 'remove']);

Route::post('/addwish', [App\Http\Controllers\WishController::class, 'addTowish']);
Route::post('/remove-wish', [App\Http\Controllers\WishController::class, 'remove']);


Route::get('order/{id}', [App\Http\Controllers\OrderController::class, 'storeOrd']);
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index']);



Route::get('plats', [App\Http\Controllers\PlatController::class,'display'])->name('plats');
Route::get('category', [App\Http\Controllers\CategoryController::class,'index'])->name('category');

// Route::get('/chef/profil/{id}', function () {
//     return view('chefs.chefProfile');
// });
Route::get('/chef/profil/{id}', [App\Http\Controllers\ChefController::class, 'profil']);



// Route::get('/noschefs', function () {
//     return view('users.nosChefs');
// });

Route::get('/favorite', function () {
    return view('users.favorite');
});


Route::get('/platinfos', function () {
    return view('users.platinfos');
});

Route::get('/apropos', function () {
    return view('users.apropos');
});

Route::get('/contacterN', function () {
    return view('users.contacterN');
});
Route::get('/connecter', function () {
    return view('users.connexion');
});

Route::get('/inscrir', function () {
    return view('auth.registerChef');
});


Auth::routes();

Route::get('/chef', 'App\Http\Controllers\HomeController@handleChef')->name('chef.route')->middleware('chef');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [App\Http\Controllers\Auth\LoginAdminController::class, 'index'])->name('login.admin');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginAdminController::class, 'login'])->name('login.admin');


Route::post('/user/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comment');



// admin routes
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/user/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/message', [App\Http\Controllers\ContactController::class, 'index'])->name('message');
Route::get('/admin/chefs', 'App\Http\Controllers\AdminController@chefsdata')->name('admin.chefs');
Route::resource('admin-category',App\Http\Controllers\CategoryController::class);

