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

//Route::get('/blog', [App\Http\Controllers\Front\BlogController::class, 'index']);

//Route::get('/blog/{slug}', [App\Http\Controllers\Front\BlogController::class, 'detail']);

//Route::get('/blog-category/{slug}', [App\Http\Controllers\Front\BlogController::class, 'category']);

//Route::get('/customer-signup', [App\Http\Controllers\Front\HomeController::class, 'create']);

Route::post('/csignup', [App\Http\Controllers\Front\HomeController::class, 'csignup']);

Route::post('/contact-us', [App\Http\Controllers\Front\HomeController::class, 'contact']);

Route::post('/clogin', [App\Http\Controllers\Front\HomeController::class, 'clogin']);

Route::get('/clogout', [App\Http\Controllers\Front\HomeController::class, 'clogout']);

Route::get('/course/{slug}', [App\Http\Controllers\Front\HomeController::class, 'course']);

Route::get('/admin', [App\Http\Controllers\Admin\UserController::class, 'index']);

Route::post('/admin', [App\Http\Controllers\Admin\UserController::class, 'login']);

Route::get('/admin/logout', [App\Http\Controllers\Admin\UserController::class, 'logout']);

Route::middleware([App\Http\Middleware\Login::class])->group(function(){

   Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

   Route::get('/admin/options', [App\Http\Controllers\Admin\OptionController::class, 'index']);

   Route::post('/admin/options', [App\Http\Controllers\Admin\OptionController::class, 'update']);

   

   Route::get('/admin/courses', [App\Http\Controllers\Admin\CourseController::class, 'index']);

   Route::get('/admin/courses/create', [App\Http\Controllers\Admin\CourseController::class, 'create']);

   Route::post('/admin/courses/store', [App\Http\Controllers\Admin\CourseController::class, 'store']);

   Route::get('/admin/courses/edit/{id}', [App\Http\Controllers\Admin\CourseController::class, 'edit']);

   Route::post('/admin/courses/update/{id}', [App\Http\Controllers\Admin\CourseController::class, 'update']);

   Route::get('/admin/courses/destroy/{id}', [App\Http\Controllers\Admin\CourseController::class, 'destroy']);

   Route::get('/admin/courses/query/{id}', [App\Http\Controllers\Admin\CourseController::class, 'query']);



   Route::get('/admin/lessons', [App\Http\Controllers\Admin\LessonController::class, 'index']);

   Route::get('/admin/lessons/create', [App\Http\Controllers\Admin\LessonController::class, 'create']);

   Route::post('/admin/lessons/store', [App\Http\Controllers\Admin\LessonController::class, 'store']);

   Route::get('/admin/lessons/edit/{id}', [App\Http\Controllers\Admin\LessonController::class, 'edit']);

   Route::post('/admin/lessons/update/{id}', [App\Http\Controllers\Admin\LessonController::class, 'update']);

   Route::get('/admin/lessons/destroy/{id}', [App\Http\Controllers\Admin\LessonController::class, 'destroy']);







   Route::get('/admin/lessons/mcq/{id}', [App\Http\Controllers\Admin\LessonController::class, 'mcq']);

   Route::get('/admin/lessons/mcq/create/{id}', [App\Http\Controllers\Admin\LessonController::class, 'mcqcreate']);

   Route::post('/admin/lessons/mcq/store', [App\Http\Controllers\Admin\LessonController::class, 'mcqstore']);

   Route::get('/admin/lessons/mcq/edit/{id}', [App\Http\Controllers\Admin\LessonController::class, 'mcqedit']);

   Route::post('/admin/lessons/mcq/update/{id}', [App\Http\Controllers\Admin\LessonController::class, 'mcqupdate']);

   Route::get('/admin/lessons/destroy/{id}', [App\Http\Controllers\Admin\LessonController::class, 'mcqdestroy']);



   Route::get('/admin/contacts', [App\Http\Controllers\Admin\DashboardController::class, 'contacts']);
















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


//Artisan::call('make:model Contact -m');
//Artisan::call('migrate');
