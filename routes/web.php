<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AcademicController;
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
//----------------- front-end route-----------------
Route::get('/', [FrontController::class, 'home_view']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/administration', [FrontController::class, 'administration']);
Route::get('/academic', [FrontController::class, 'academic']);
Route::get('/admission', [FrontController::class, 'admission']);
Route::get('/faculty', [FrontController::class, 'faculty']);
Route::get('/faculty_member_details', [FrontController::class, 'faculty_member_details']);
Route::get('/video-gallery', [FrontController::class, 'video_gallery']);
Route::get('/image-gallery', [FrontController::class, 'image_gallery']);
Route::get('/result', [FrontController::class, 'result']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/allumni', [FrontController::class, 'allumni']);

//----------------- admin panel route-----------------
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('admin.dashboard');
Route::get('/add_syllabus', [AcademicController::class, 'add_syllabus'])->middleware(['auth'])->name('add_syllabus');
Route::post('/add_syllabus_post', [AcademicController::class, 'add_syllabus_post'])->middleware(['auth'])->name('add_syllabus_post');
Route::get('/manage_syllabus', [AcademicController::class, 'manage_syllabus'])->middleware(['auth'])->name('manage_syllabus');
Route::get('/edit_syllabus/{id}', [AcademicController::class, 'edit_syllabus'])->middleware(['auth'])->name('edit_syllabus');
Route::post('/edit_syllabus_post', [AcademicController::class, 'edit_syllabus_post'])->middleware(['auth'])->name('edit_syllabus_post');
Route::get('/syllabus_delete/{id}', [AcademicController::class, 'syllabus_delete'])->middleware(['auth'])->name('syllabus_delete');

require __DIR__.'/auth.php';



//------------- cache clear---------------------
Route::get('/clear', function () {
    $output = new \Symfony\Component\Console\Output\BufferedOutput();
    Artisan::call('optimize:clear', array(), $output);
    return $output->fetch();
})->name('/clear');