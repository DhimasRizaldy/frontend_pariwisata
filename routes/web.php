<?php

// Auth Controllers
use App\Http\Controllers\AuthControllers;
// End Auth Controllers

// Admin Controllers
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\ProfileControllers;
use App\Http\Controllers\DaerahControllers;
use App\Http\Controllers\KategoriControllers;
use App\Http\Controllers\WisataControllers;
use App\Http\Controllers\RekomendasiControllers;
use App\Http\Controllers\UlasanControllers;
// End Admin Controllers

// User Controllers
use App\Http\Controllers\DashboardUserControllers;
// End User Controllers
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth']], function () {
    // ...
    Route::post('/logout', [AuthControllers::class, 'logout'])->name('logout');
    Route::get("/profile", [UserControllers::class, 'profile'])->name('admin.vw_user.userProfile');
    // ...
});

// Rute login di luar grup middleware 'auth'
Route::get('/login', [AuthControllers::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthControllers::class, 'login'])->name('login');



// Router Auth Login & Register
Route::get("login", [AuthControllers::class, 'viewLogin'])->name('Login');
Route::get("register", [AuthControllers::class, 'viewRegister'])->name('Register');

// Route::post('/login', [AuthControllers::class, 'login'])->name('login');

// Route::post('/logout', [AuthControllers::class, 'logout'])->name('logout');
// End Router Auth Login & Register

// Router Dashboard User
Route::get("/", [DashboardUserControllers::class, 'viewMain'])->name('user/dashboardUser');
Route::get("/dashboard", [DashboardUserControllers::class, 'viewMain'])->name('user/dashboardUser');
// End Router Dashboard User


// Router Dashboard Admin
Route::get("admin/dashboard", [DashboardControllers::class, 'viewDashboard'])->name('admin/dashboardAdmin');
// End Router Dashboard Admin

// Router User
Route::get("admin/user", [UserControllers::class, 'viewUser'])->name('admin/vw_user/view_user');
// End Router User

// Router Profile
Route::get("admin/profile", [ProfileControllers::class, 'viewProfile'])->name('admin/vw_Profile/view_profile');
// End Router Profile

// Router Daerah
Route::get("admin/daerah", [DaerahControllers::class, 'viewDaerah'])->name('admin/vw_daerah/view_daerah');
// End Router Daerah

// Router Ulasan
Route::get("admin/ulasan", [UlasanControllers::class, 'viewUlasan'])->name('admin/vw_ulasan/view_ulasan');
// End Router Ulasan

// Router Wisata
Route::get("admin/wisata", [WisataControllers::class, 'viewWisata'])->name('admin/vw_wisata/view_wisata');
// End Router Wisata

// Router KategoriWIsata
Route::get("admin/Kategoriwisata", [KategoriControllers::class, 'viewKategori'])->name('admin/vw_kategoriwisata/view_kategoriwisata');
// End Router KategoriWIsata

// Router Rekomendasi
Route::get("admin/rekomendasi", [RekomendasiControllers::class, 'viewRekomendasi'])->name('admin/vw_rekomendasi/view_rekomendasi');
// End Router Rekomendasi


// Router Dashboard User
Route::get("/dashboard", [DashboardUserControllers::class, 'viewDashboard'])->name('user/dashboardUser');

// Router tentang kami
Route::get("/tentangKami", [DashboardUserControllers::class, 'viewTentangKami'])->name('user/vw_tentangkami/tentangKami');

// End Router Dashboard User