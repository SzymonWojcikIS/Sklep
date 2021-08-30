<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\AdminAddCateComponent;
use App\Http\Livewire\Admin\AdminAddProdComponent;
use App\Http\Livewire\Admin\AdminCateComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCateComponent;
use App\Http\Livewire\Admin\AdminEditProdComponent;
use App\Http\Livewire\Admin\AdminProdComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CateComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\FakturaComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MenuComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/',HomeComponent::class);

Route::get('/menu',MenuComponent::class);

Route::get('/cart',CartComponent::class)->name('prod.cart');

Route::get('/checkout', CheckoutComponent::class)->name('checkout');

Route::get('/prod/{slug}',DetailsComponent::class)->name('prod.details');

Route::get('/faktura',FakturaComponent::class)->name('faktura');

Route::get('/prod/cate/{cate_slug}',CateComponent::class)->name('prod.cate');

Route::get('/thankyou', ThankyouComponent::class)->name('thankyou');

Route::get('/aboutus', AboutUsComponent::class)->name('aboutus');

Route::get('/kontakt', ContactUsComponent::class)->name('kontakt');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    

});

//Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/cates',AdminCateComponent::class)->name('admin.cates');
    Route::get('/admin/cate/add',AdminAddCateComponent::class)->name('admin.addcate');
    Route::get('/admin/cate/edit/{cate_slug}',AdminEditCateComponent::class)->name('admin.editcate');
    Route::get('/admin/prods',AdminProdComponent::class)->name('admin.prods');
    Route::get('/admin/prod/add',AdminAddProdComponent::class)->name('admin.addprod');
    Route::get('/admin/prod/edit/{prod_slug}',AdminEditProdComponent::class)->name('admin.editprod');
});