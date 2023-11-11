<?php

use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\ProfileControllers;
use App\Http\Controllers\DaerahControllers;
use App\Http\Controllers\KategoriControllers;
use App\Http\Controllers\WisataControllers;
use App\Http\Controllers\RekomendasiControllers;
use App\Http\Controllers\UlasanControllers;
use Illuminate\Support\Facades\Route;



// Router Dashboard
Route::get("admin/dashboard", [DashboardControllers::class, 'viewDashboard'])->name('admin/dashboardAdmin');
// End Router Dashboard

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