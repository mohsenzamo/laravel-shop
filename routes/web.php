<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GroupFormController;
use App\Http\Controllers\GroupListController;
use App\Http\Controllers\GroupUpdateController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\IndexClientController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProductFormController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductUpdateController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopDetailsController;
use App\Http\Controllers\SingleBlogController;
use App\Http\Controllers\SingleProjectController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\UserUpdateController;
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
Route::get('/',[IndexClientController::class,'IndexClientViewFunction'])->name('IndexClientViewRoute');
Route::get('/shop',[ShopController::class,'ShopViewFunction'])->name('ShopViewRoute');
Route::get('/blog',[BlogController::class,'BlogViewFunction'])->name('BlogViewRoute');
Route::get('/singleblog',[SingleBlogController::class,'SingleBlogViewFunction'])->name('SingleBlogViewRoute');
Route::get('/shopdetails',[ShopDetailsController::class,'ShopDetailsViewFunction'])->name('ShopDetailsViewRoute');
Route::get('/aboutus',[AboutUsController::class,'AboutUsViewFunction'])->name('AboutUsViewRoute');
Route::get('/features',[FeaturesController::class,'FeaturesViewFunction'])->name('FeaturesViewRoute');
Route::get('/services',[ServicesController::class,'ServicesViewFunction'])->name('ServicesViewRoute');
Route::get('/gallery',[GalleryController::class,'GalleryViewFunction'])->name('GalleryViewRoute');
Route::get('/team',[TeamController::class,'TeamViewFunction'])->name('TeamViewRoute');
Route::get('/pricing',[PricingController::class,'PricingViewFunction'])->name('PricingViewRoute');
Route::get('/login',[LoginController::class,'LoginViewFunction'])->name('LoginViewRoute');
Route::get('/signup',[SingUpController::class,'SingUpViewFunction'])->name('SingUpViewRoute');
Route::post('/signup',[SingUpController::class,'SignUpFunction'])->name('SignUpRout');
Route::get('/comingsoon',[ComingSoonController::class,'ComingSoonViewFunction'])->name('ComingSoonViewRoute');
Route::get('/error',[ErrorController::class,'ErrorViewFunction'])->name('ErrorViewRoute');
Route::get('/faq',[FaqController::class,'FaqViewFunction'])->name('FaqViewRoute');
Route::get('/project',[ProjectController::class,'ProjectViewFunction'])->name('ProjectViewRoute');
Route::get('/singleproject',[SingleProjectController::class,'SingleProjectViewFunction'])->name('SingleProjectViewRoute');
Route::get('/cart',[CartController::class,'CartViewFunction'])->name('CartViewRoute');
Route::get('/checkout',[CheckOutController::class,'CheckOutViewFunction'])->name('CheckOutViewRoute');
Route::get('/contactus',[ContactUsController::class,'ContactUsViewFunction'])->name('ContactUsViewRoute');
Route::get('/admin',[IndexAdminController::class,'IndexAdminViewFunction'])->name('IndexAdminViewRoute');
Route::get('/loginadmin',[LoginAdminController::class,'LoginAdminViewFunction'])->name('LoginAdminViewRoute');
Route::get('/register',[RegisterAdminController::class,'RegisterAdminViewFunction'])->name('RegisterAdminViewRoute');

Route::get('/groupform',[GroupFormController::class,'GroupFormViewFunction'])->name('GroupFormViewRoute');
Route::post('/groupform',[GroupFormController::class,'AddGroupFunction'])->name('AddGroupRout');
Route::get('/grouplist',[GroupListController::class,'GroupListViewFunction'])->name('GroupListViewRoute');
Route::get('/groupupdate/{id}',[GroupUpdateController::class,'GroupUpdateFunction'])->name('GroupUpdateViewRoute');
Route::post('/grouplist',[GroupUpdateController::class,'update'])->name('GroupUpdateRoute');
Route::get('/grouplist/{id}',[GroupFormController::class,'DelelteFunction'])->name('GroupDeleteViewRoute');

Route::get('/productform',[ProductFormController::class,'ProductFormViewFunction'])->name('ProductFormViewRoute');
Route::post('/productform',[ProductFormController::class,'AddProductFunction'])->name('AddProductRout');
Route::get('/productlist',[ProductListController::class,'ProductListViewFunction'])->name('ProductListViewRoute');
Route::get('/productupdate/{id}',[ProductUpdateController::class,'ProductUpdateFunction'])->name('ProductUpdateViewRoute');
Route::post('/productlist',[ProductUpdateController::class,'update'])->name('ProductUpdateRoute');
Route::get('/productlist/{id}',[ProductFormController::class,'DelelteFunction'])->name('ProductDeleteViewRoute');


Route::get('/userform',[UserFormController::class,'UserFormViewFunction'])->name('UserFormViewRoute');
Route::post('/userform',[UserFormController::class,'AddUserFunction'])->name('AddUserRout');
Route::get('/userlist',[UserListController::class,'UserListViewFunction'])->name('UserListViewRoute');
Route::get('/userupdate/{id}',[UserUpdateController::class,'UserUpdateFunction'])->name('UserUpdateViewRoute');
Route::post('/userlist',[UserUpdateController::class,'update'])->name('UserUpdateRoute');
Route::get('/userlist/{id}',[UserFormController::class,'DelelteFunction'])->name('UserDeleteViewRoute');