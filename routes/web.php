<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Server\AdminController;
use App\Http\Controllers\Server\DashboardController;
use App\Http\Controllers\Server\JurusanController;
use App\Http\Controllers\Server\MasterController;
use App\Http\Controllers\Server\OperatorController;
use App\Http\Controllers\Server\RequestDeleteSiswaController;
use App\Http\Controllers\Server\RolesController;
use App\Http\Controllers\Server\SekolahController;
use App\Http\Controllers\Server\SiswaController;
use App\Http\Controllers\Server\UserRolesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Server\RequestEditSiswaController;
use App\Http\Controllers\Server\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('auth.login');
});


//untuk semua role
Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    // Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    // Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
    // Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
    // Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    // Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    // Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});

// untuk role 1
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Master Data
    Route::get('/master', [MasterController::class, 'index'])->name('master.index');

    //     //Roles
    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');

    //     //User
    Route::get('/users', [UserController::class, 'index'])->name('users.index');


    //     //User Roles
    Route::get('/user-roles', [UserRolesController::class, 'index'])->name('user-roles.index');
    Route::get('/user-roles/create', [UserRolesController::class, 'create'])->name('user-roles.create');
    Route::post('/user-roles', [UserRolesController::class, 'store'])->name('user-roles.store');
    Route::get('/user-roles/{id}/edit', [UserRolesController::class, 'edit'])->name('user-roles.edit');
    Route::put('/user-roles/{id}', [UserRolesController::class, 'update'])->name('user-roles.update');
    Route::delete('/user-roles/{id}', [UserRolesController::class, 'destroy'])->name('user-roles.destroy');

    //     //Sekolah
    Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');
    Route::get('/sekolah/create', [SekolahController::class, 'create'])->name('sekolah.create');
    Route::post('/sekolah', [SekolahController::class, 'store'])->name('sekolah.store');
    Route::get('/sekolah/{id}', [SekolahController::class, 'show'])->name('sekolah.show');
    Route::get('/sekolah/{id}/edit', [SekolahController::class, 'edit'])->name('sekolah.edit');
    Route::put('/sekolah/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
    Route::delete('/sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');

    //     //Jurusan
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
    Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

    //Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    //operator
    Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
    Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
    Route::post('/operator', [OperatorController::class, 'store'])->name('operator.store');
    Route::get('/operator/{id}', [OperatorController::class, 'show'])->name('operator.show');
    Route::get('/operator/{id}/edit', [OperatorController::class, 'edit'])->name('operator.edit');
    Route::put('/operator/{id}', [OperatorController::class, 'update'])->name('operator.update');
    Route::delete('/operator/{id}', [OperatorController::class, 'destroy'])->name('operator.destroy');

    //Siswa
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    Route::get('/reqedit', [RequestEditSiswaController::class, 'index'])->name('siswa.reqedit');
    Route::get('/reqedit/{id}', [RequestEditSiswaController::class, 'show'])->name('siswa.reqedit.show');
    Route::put('/reqedit/{id}', [RequestEditSiswaController::class, 'update'])->name('siswa.reqedit.update');

    Route::get('/reqdelete', [RequestDeleteSiswaController::class, 'index'])->name('siswa.reqdelete');
    Route::get('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'show'])->name('siswa.reqdelete.show');
    Route::delete('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'destroy'])->name('siswa.reqdelete.destroy');
});


// untuk role 2
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // operator
    Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
    Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
    Route::post('/operator', [OperatorController::class, 'store'])->name('operator.store');
    Route::get('/operator/{id}', [OperatorController::class, 'show'])->name('operator.show');
    Route::get('/operator/{id}/edit', [OperatorController::class, 'edit'])->name('operator.edit');
    Route::put('/operator/{id}', [OperatorController::class, 'update'])->name('operator.update');
    Route::delete('/operator/{id}', [OperatorController::class, 'destroy'])->name('operator.destroy');

    // Siswa
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    //Request Edit
    Route::get('/reqedit', [RequestEditSiswaController::class, 'index'])->name('siswa.reqedit');
    Route::get('/reqedit/{id}', [RequestEditSiswaController::class, 'show'])->name('siswa.reqedit.show');
    Route::put('/reqedit/{id}', [RequestEditSiswaController::class, 'update'])->name('siswa.reqedit.update');

    //Request Delete
    Route::get('/reqdelete', [RequestDeleteSiswaController::class, 'index'])->name('siswa.reqdelete');
    Route::get('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'show'])->name('siswa.reqdelete.show');
    Route::delete('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'destroy'])->name('siswa.reqdelete.destroy');
});

// Route::group(['middleware' => ['auth']], function () {

//     // // Route yang bisa diakses oleh semua role
//     // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('role:1|2|3');
//     // // Siswa
//     // Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index')->middleware('role:1|2|3');
//     // Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create')->middleware('role:1|2|3');
//     // Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store')->middleware('role:1|2|3');
//     // Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show')->middleware('role:1|2|3');
//     // Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit')->middleware('role:1|2|3');
//     // Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update')->middleware('role:1|2|3');
//     // Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy')->middleware('role:1|2|3');

//     // // 1 dan 2
//     // //operator
//     // Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index')->middleware('role:1|2');
//     // Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create')->middleware('role:1|2');
//     // Route::post('/operator', [OperatorController::class, 'store'])->name('operator.store')->middleware('role:1|2');
//     // Route::get('/operator/{id}', [OperatorController::class, 'show'])->name('operator.show')->middleware('role:1|2');
//     // Route::get('/operator/{id}/edit', [OperatorController::class, 'edit'])->name('operator.edit')->middleware('role:1|2');
//     // Route::put('/operator/{id}', [OperatorController::class, 'update'])->name('operator.update')->middleware('role:1|2');
//     // Route::delete('/operator/{id}', [OperatorController::class, 'destroy'])->name('operator.destroy')->middleware('role:1|2');

//     // //Request Edit
//     // Route::get('/reqedit', [RequestEditSiswaController::class, 'index'])->name('siswa.reqedit')->middleware('role:1|2');
//     // Route::get('/reqedit/{id}', [RequestEditSiswaController::class, 'show'])->name('siswa.reqedit.show')->middleware('role:1|2');
//     // Route::put('/reqedit/{id}', [RequestEditSiswaController::class, 'update'])->name('siswa.reqedit.update')->middleware('role:1|2');

//     // //Request Delete
//     // Route::get('/reqdelete', [RequestDeleteSiswaController::class, 'index'])->name('siswa.reqdelete')->middleware('role:1|2');
//     // Route::get('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'show'])->name('siswa.reqdelete.show')->middleware('role:1|2');
//     // Route::delete('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'destroy'])->name('siswa.reqdelete.destroy')->middleware('role:1|2');


//     // Route yang hanya bisa diakses oleh role 1
//     Route::group(['middleware' => 'role:1'], function () {
//         Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//         Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//         Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//         Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//         //     //Master Data
//         Route::get('/master', [MasterController::class, 'index'])->name('master.index');

//         //     //Roles
//         Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');

//         //     //User
//         Route::get('/users', [UserController::class, 'index'])->name('users.index');


//         //     //User Roles
//         Route::get('/user-roles', [UserRolesController::class, 'index'])->name('user-roles.index');
//         Route::get('/user-roles/create', [UserRolesController::class, 'create'])->name('user-roles.create');
//         Route::post('/user-roles', [UserRolesController::class, 'store'])->name('user-roles.store');
//         Route::get('/user-roles/{id}/edit', [UserRolesController::class, 'edit'])->name('user-roles.edit');
//         Route::put('/user-roles/{id}', [UserRolesController::class, 'update'])->name('user-roles.update');
//         Route::delete('/user-roles/{id}', [UserRolesController::class, 'destroy'])->name('user-roles.destroy');

//         //     //Sekolah
//         Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');
//         Route::get('/sekolah/create', [SekolahController::class, 'create'])->name('sekolah.create');
//         Route::post('/sekolah', [SekolahController::class, 'store'])->name('sekolah.store');
//         Route::get('/sekolah/{id}', [SekolahController::class, 'show'])->name('sekolah.show');
//         Route::get('/sekolah/{id}/edit', [SekolahController::class, 'edit'])->name('sekolah.edit');
//         Route::put('/sekolah/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
//         Route::delete('/sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');

//         //     //Jurusan
//         Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
//         Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
//         Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
//         Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
//         Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
//         Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
//         Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

//         //     //Siswa
//         Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//         Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
//         Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
//         Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
//         Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
//         Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
//         Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//         Route::get('/reqedit', [RequestEditSiswaController::class, 'index'])->name('siswa.reqedit');
//         Route::get('/reqedit/{id}', [RequestEditSiswaController::class, 'show'])->name('siswa.reqedit.show');
//         Route::put('/reqedit/{id}', [RequestEditSiswaController::class, 'update'])->name('siswa.reqedit.update');

//         Route::get('/reqdelete', [RequestDeleteSiswaController::class, 'index'])->name('siswa.reqdelete');
//         Route::get('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'show'])->name('siswa.reqdelete.show');
//         Route::delete('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'destroy'])->name('siswa.reqdelete.destroy');

//         //     //Admin
//         Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//         Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
//         Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
//         Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');
//         Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
//         Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
//         Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

//         //     //operator
//         Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
//         Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
//         Route::post('/operator', [OperatorController::class, 'store'])->name('operator.store');
//         Route::get('/operator/{id}', [OperatorController::class, 'show'])->name('operator.show');
//         Route::get('/operator/{id}/edit', [OperatorController::class, 'edit'])->name('operator.edit');
//         Route::put('/operator/{id}', [OperatorController::class, 'update'])->name('operator.update');
//         Route::delete('/operator/{id}', [OperatorController::class, 'destroy'])->name('operator.destroy');
//     });


//     // Route yang hanya bisa diakses oleh role 2
//     Route::group(['middleware' => 'role:2'], function () {
//         Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//         //operator
//         Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
//         Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
//         Route::post('/operator', [OperatorController::class, 'store'])->name('operator.store');
//         Route::get('/operator/{id}', [OperatorController::class, 'show'])->name('operator.show');
//         Route::get('/operator/{id}/edit', [OperatorController::class, 'edit'])->name('operator.edit');
//         Route::put('/operator/{id}', [OperatorController::class, 'update'])->name('operator.update');
//         Route::delete('/operator/{id}', [OperatorController::class, 'destroy'])->name('operator.destroy');

//         // Siswa
//         Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//         Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
//         Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
//         Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
//         Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
//         Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
//         Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//         //Request Edit
//         Route::get('/reqedit', [RequestEditSiswaController::class, 'index'])->name('siswa.reqedit');
//         Route::get('/reqedit/{id}', [RequestEditSiswaController::class, 'show'])->name('siswa.reqedit.show');
//         Route::put('/reqedit/{id}', [RequestEditSiswaController::class, 'update'])->name('siswa.reqedit.update');

//         //Request Delete
//         Route::get('/reqdelete', [RequestDeleteSiswaController::class, 'index'])->name('siswa.reqdelete');
//         Route::get('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'show'])->name('siswa.reqdelete.show');
//         Route::delete('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'destroy'])->name('siswa.reqdelete.destroy');
//     });

//     // Route yang hanya bisa diakses oleh role 3
//     Route::group(['middleware' => 'role:3'], function () {
//         Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//         // Siswa
//         Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//         Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
//         Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
//         Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
//         Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
//         Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
//         Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
//     });
// });



// Route::group(['middleware' => ['auth', 'role:1']], function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     //     //Master Data
//     Route::get('/master', [MasterController::class, 'index'])->name('master.index');

//     //     //Roles
//     Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');

//     //     //User
//     Route::get('/users', [UserController::class, 'index'])->name('users.index');


//     //     //User Roles
//     Route::get('/user-roles', [UserRolesController::class, 'index'])->name('user-roles.index');
//     Route::get('/user-roles/create', [UserRolesController::class, 'create'])->name('user-roles.create');
//     Route::post('/user-roles', [UserRolesController::class, 'store'])->name('user-roles.store');
//     Route::get('/user-roles/{id}/edit', [UserRolesController::class, 'edit'])->name('user-roles.edit');
//     Route::put('/user-roles/{id}', [UserRolesController::class, 'update'])->name('user-roles.update');
//     Route::delete('/user-roles/{id}', [UserRolesController::class, 'destroy'])->name('user-roles.destroy');

//     //     //Sekolah
//     Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah.index');
//     Route::get('/sekolah/create', [SekolahController::class, 'create'])->name('sekolah.create');
//     Route::post('/sekolah', [SekolahController::class, 'store'])->name('sekolah.store');
//     Route::get('/sekolah/{id}', [SekolahController::class, 'show'])->name('sekolah.show');
//     Route::get('/sekolah/{id}/edit', [SekolahController::class, 'edit'])->name('sekolah.edit');
//     Route::put('/sekolah/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
//     Route::delete('/sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');

//     //     //Jurusan
//     Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
//     Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
//     Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
//     Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
//     Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
//     Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
//     Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

//     //     //Siswa
//     Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//     Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
//     Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
//     Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
//     Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
//     Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
//     Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//     Route::get('/reqedit', [RequestEditSiswaController::class, 'index'])->name('siswa.reqedit');
//     Route::get('/reqedit/{id}', [RequestEditSiswaController::class, 'show'])->name('siswa.reqedit.show');
//     Route::put('/reqedit/{id}', [RequestEditSiswaController::class, 'update'])->name('siswa.reqedit.update');

//     Route::get('/reqdelete', [RequestDeleteSiswaController::class, 'index'])->name('siswa.reqdelete');
//     Route::get('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'show'])->name('siswa.reqdelete.show');
//     Route::delete('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'destroy'])->name('siswa.reqdelete.destroy');

//     //     //Admin
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//     Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
//     Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
//     Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');
//     Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
//     Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
//     Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

//     //     //operator
//     Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
//     Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
//     Route::post('/operator', [OperatorController::class, 'store'])->name('operator.store');
//     Route::get('/operator/{id}', [OperatorController::class, 'show'])->name('operator.show');
//     Route::get('/operator/{id}/edit', [OperatorController::class, 'edit'])->name('operator.edit');
//     Route::put('/operator/{id}', [OperatorController::class, 'update'])->name('operator.update');
//     Route::delete('/operator/{id}', [OperatorController::class, 'destroy'])->name('operator.destroy');
// });

// Route::group(['middleware' => ['auth', 'role:2']], function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     //operator
//     Route::get('/operator', [OperatorController::class, 'index'])->name('operator.index');
//     Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
//     Route::post('/operator', [OperatorController::class, 'store'])->name('operator.store');
//     Route::get('/operator/{id}', [OperatorController::class, 'show'])->name('operator.show');
//     Route::get('/operator/{id}/edit', [OperatorController::class, 'edit'])->name('operator.edit');
//     Route::put('/operator/{id}', [OperatorController::class, 'update'])->name('operator.update');
//     Route::delete('/operator/{id}', [OperatorController::class, 'destroy'])->name('operator.destroy');

//     // Siswa
//     Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//     Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
//     Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
//     Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
//     Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
//     Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
//     Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//     //Request Edit
//     Route::get('/reqedit', [RequestEditSiswaController::class, 'index'])->name('siswa.reqedit');
//     Route::get('/reqedit/{id}', [RequestEditSiswaController::class, 'show'])->name('siswa.reqedit.show');
//     Route::put('/reqedit/{id}', [RequestEditSiswaController::class, 'update'])->name('siswa.reqedit.update');

//     //Request Delete
//     Route::get('/reqdelete', [RequestDeleteSiswaController::class, 'index'])->name('siswa.reqdelete');
//     Route::get('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'show'])->name('siswa.reqdelete.show');
//     Route::delete('/reqdelete/{id}', [RequestDeleteSiswaController::class, 'destroy'])->name('siswa.reqdelete.destroy');
// });

// Route::group(['middleware' => ['auth', 'role:3']], function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     // Siswa
//     Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//     Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
//     Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
//     Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
//     Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
//     Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
//     Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
// });


require __DIR__ . '/auth.php';
