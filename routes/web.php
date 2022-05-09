<?php
require __DIR__ . '/auth.php';
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrontcontactController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AcademicController;
use App\Http\Controllers\admin\FacultyController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AdmissionController;
use App\Http\Controllers\admin\ContactController;
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
Route::post('/contact_post', [FrontcontactController::class, 'contact_post'])->name('contact_post');;
Route::get('/allumni', [FrontController::class, 'allumni']);

//----------------- admin panel route-----------------
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('admin.dashboard');


Route::prefix('admin')->group(function () {
	//----------------- admin panel syllabus route -----------------
	Route::get('/add_syllabus', [AcademicController::class, 'add_syllabus'])->middleware(['auth'])->name('admin.add_syllabus');
	Route::post('/add_syllabus_post', [AcademicController::class, 'add_syllabus_post'])->middleware(['auth'])->name('admin.add_syllabus_post');
	Route::get('/manage_syllabus', [AcademicController::class, 'manage_syllabus'])->middleware(['auth'])->name('admin.manage_syllabus');
	Route::get('/edit_syllabus/{id}', [AcademicController::class, 'edit_syllabus'])->middleware(['auth'])->name('admin.edit_syllabus');
	Route::post('/edit_syllabus_post', [AcademicController::class, 'edit_syllabus_post'])->middleware(['auth'])->name('admin.edit_syllabus_post');
	Route::get('/syllabus_delete/{id}', [AcademicController::class, 'syllabus_delete'])->middleware(['auth'])->name('admin.syllabus_delete');
	//----------------- admin panel faculty route -----------------
	Route::get('/add_faculty_member', [FacultyController::class, 'add_faculty_member'])->middleware(['auth'])->name('admin.add_faculty_member');
	Route::post('/add_faculty_member_post', [FacultyController::class, 'add_faculty_member_post'])->middleware(['auth'])->name('admin.add_faculty_member_post');
	Route::get('/manage_faculty_member', [FacultyController::class, 'manage_faculty_member'])->middleware(['auth'])->name('admin.manage_faculty_member');
	Route::get('/edit_faculty_member/{id}', [FacultyController::class, 'edit_faculty_member'])->middleware(['auth'])->name('admin.edit_faculty_member');
	Route::post('/edit_faculty_member_post', [FacultyController::class, 'edit_faculty_member_post'])->middleware(['auth'])->name('admin.edit_faculty_member_post');
	Route::get('/delete_faculty_member/{id}', [FacultyController::class, 'delete_faculty_member'])->middleware(['auth'])->name('admin.delete_faculty_member');
	Route::get('/add_faculty_chairman', [FacultyController::class, 'add_faculty_chairman'])->middleware(['auth'])->name('admin.add_faculty_chairman');
	Route::post('/add_faculty_chairman_post', [FacultyController::class, 'add_faculty_chairman_post'])->middleware(['auth'])->name('admin.add_faculty_chairman_post');
	Route::get('/manage_faculty_chairman', [FacultyController::class, 'manage_faculty_chairman'])->middleware(['auth'])->name('admin.manage_faculty_chairman');
	Route::get('/edit_faculty_chairman/{id}', [FacultyController::class, 'edit_faculty_chairman'])->middleware(['auth'])->name('admin.edit_faculty_chairman');
	Route::post('/edit_faculty_chairman_post', [FacultyController::class, 'edit_faculty_chairman_post'])->middleware(['auth'])->name('admin.edit_faculty_chairman_post');
	Route::get('/delete_faculty_chairman/{id}', [FacultyController::class, 'delete_faculty_chairman'])->middleware(['auth'])->name('admin.delete_faculty_chairman');
	//----------------- admin panel about route -----------------
	Route::get('about', [AboutController::class, 'admin_view_about'])->middleware(['auth'])->name('admin.about');
	Route::post('about_post', [AboutController::class, 'admin_about_post'])->middleware(['auth'])->name('admin.about_post');
	//----------------- admin panel admission route -----------------
	Route::get('/add_admission', [AdmissionController::class, 'add_admission'])->middleware(['auth'])->name('admin.add_admission');
	Route::post('/add_admission_post', [AdmissionController::class, 'add_admission_post'])->middleware(['auth'])->name('admin.add_admission_post');
	Route::get('/manage_admission', [AdmissionController::class, 'manage_admission'])->middleware(['auth'])->name('admin.manage_admission');
	Route::get('/edit_admission/{id}', [AdmissionController::class, 'edit_admission'])->middleware(['auth'])->name('admin.edit_admission');
	Route::post('/edit_admission_post', [AdmissionController::class, 'edit_admission_post'])->middleware(['auth'])->name('admin.edit_admission_post');
	Route::get('/delete_admission/{id}', [AdmissionController::class, 'delete_admission'])->middleware(['auth'])->name('admin.delete_admission');
	//----------------- admin panel Contact route -----------------
	Route::get('/contact', [ContactController::class, 'admin_view_contact'])->middleware(['auth'])->name('admin.contact');
	Route::post('/contact_post', [ContactController::class, 'admin_contact_post'])->middleware(['auth'])->name('admin.contact_post');
	Route::get('/contact_form', [ContactController::class, 'admin_view_contact_form'])->middleware(['auth'])->name('admin.contact_form');
	Route::get('/contact_form_data_details/{id}', [ContactController::class, 'contact_form_data_details'])->middleware(['auth'])->name('admin.contact_form_data_details');
	Route::get('/contact_form_data_delete/{id}', [ContactController::class, 'contact_form_data_delete'])->middleware(['auth'])->name('admin.contact_form_data_delete');
});



//------------- cache clear---------------------
Route::get('/clear', function () {
    $output = new \Symfony\Component\Console\Output\BufferedOutput();
    Artisan::call('optimize:clear', array(), $output);
    return $output->fetch();
})->name('/clear');