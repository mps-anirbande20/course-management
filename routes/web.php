<?php



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



Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);

Route::get('/blog', [App\Http\Controllers\Front\BlogController::class, 'index']);

Route::get('/blog/{slug}', [App\Http\Controllers\Front\BlogController::class, 'detail']);

Route::get('/blog-category/{slug}', [App\Http\Controllers\Front\BlogController::class, 'category']);

Route::get('/admin', [App\Http\Controllers\Admin\UserController::class, 'index']);

Route::post('/admin', [App\Http\Controllers\Admin\UserController::class, 'login']);

Route::get('/admin/logout', [App\Http\Controllers\Admin\UserController::class, 'logout']);

Route::middleware([App\Http\Middleware\Login::class])->group(function(){

   Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

   Route::get('/admin/options', [App\Http\Controllers\Admin\OptionController::class, 'index']);

   Route::post('/admin/options', [App\Http\Controllers\Admin\OptionController::class, 'update']);

   

   Route::get('/admin/packages', [App\Http\Controllers\Admin\PackagesController::class, 'index']);

   Route::get('/admin/packages/create', [App\Http\Controllers\Admin\PackagesController::class, 'create']);

   Route::post('/admin/packages/store', [App\Http\Controllers\Admin\PackagesController::class, 'store']);

   Route::get('/admin/packages/edit/{id}', [App\Http\Controllers\Admin\PackagesController::class, 'edit']);

   Route::post('/admin/packages/update/{id}', [App\Http\Controllers\Admin\PackagesController::class, 'update']);

   Route::get('/admin/packages/destroy/{id}', [App\Http\Controllers\Admin\PackagesController::class, 'destroy']);

   Route::get('/admin/packages/query/{id}', [App\Http\Controllers\Admin\PackagesController::class, 'query']);


   Route::get('/admin/hotels', [App\Http\Controllers\Admin\HotelsController::class, 'index']);

   Route::get('/admin/hotels/create', [App\Http\Controllers\Admin\HotelsController::class, 'create']);

   Route::post('/admin/hotels/store', [App\Http\Controllers\Admin\HotelsController::class, 'store']);

   Route::get('/admin/hotels/edit/{id}', [App\Http\Controllers\Admin\HotelsController::class, 'edit']);

   Route::post('/admin/hotels/update/{id}', [App\Http\Controllers\Admin\HotelsController::class, 'update']);

   Route::get('/admin/hotels/destroy/{id}', [App\Http\Controllers\Admin\HotelsController::class, 'destroy']);

   Route::get('/admin/hotels/query/{id}', [App\Http\Controllers\Admin\HotelsController::class, 'query']);




















   /*Route::get('/admin/blogcategory', [App\Http\Controllers\Admin\BlogCategoryController::class, 'index']);

   Route::get('/admin/blogcategory/create', [App\Http\Controllers\Admin\BlogCategoryController::class, 'create']);

   Route::post('/admin/blogcategory/store', [App\Http\Controllers\Admin\BlogCategoryController::class, 'store']);

   Route::get('/admin/blogcategory/edit/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'edit']);

   Route::post('/admin/blogcategory/update/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'update']);

   Route::get('/admin/blogcategory/destroy/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'destroy']);

   Route::get('/admin/blog', [App\Http\Controllers\Admin\BlogController::class, 'index']);

   Route::get('/admin/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create']);

   Route::post('/admin/blog/store', [App\Http\Controllers\Admin\BlogController::class, 'store']);

   Route::get('/admin/blog/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit']);

   Route::post('/admin/blog/update/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update']);

   Route::get('/admin/blog/destroy/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy']);*/

});


//Artisan::call('make:model HotelEnquiry -m');
//Artisan::call('migrate');
