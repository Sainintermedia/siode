<?php

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dropdown\DependentDropdownController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Siode\Beranda\BerandaController;
// use App\Http\Controllers\Siode\bukuadministrasidesa\BukukearsipanController;
use App\Http\Controllers\Siode\Bukuadministrasidesa\BukukearsipanController;
use App\Http\Controllers\Siode\bukuadministrasidesa\BukupendudukController;
use App\Http\Controllers\Siode\bukuadministrasidesa\UmumController;
use App\Http\Controllers\Siode\Dashboard\DashboardController;
//
use App\Http\Controllers\Siode\IdentitasDesa\IdentitasDesaController;
// // use App\Http\Controllers\Siode\KartuKeluargaAnggotaController;
use App\Http\Controllers\Siode\KartuKeluargaController;
use App\Http\Controllers\Siode\KelompokController;
use App\Http\Controllers\Siode\Surat\CetakSuratController;
use App\Http\Controllers\Siode\Surat\SuratController;
use App\Http\Controllers\Siode\WilayahAdministratif\RtController;
use App\Http\Controllers\Siode\WilayahAdministratif\RwController;
// use App\Http\Controllers\Siode\Bukuadministrasidesa\BukukearsipanController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::group(['middleware' => ['guest']], function () {
    /**
     * Register Routes
     */
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login-admin-siode', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login-admin-siode', [LoginController::class, 'login'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    Route::get('/{user}/profil', [UsersController::class, 'profil'])->name('users.profil');
    // Change Password Routes...
    Route::get('change_password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('auth.change_password');
    Route::patch('change_password', [ChangePasswordController::class, 'changePassword'])->name('auth.change_password');
});

Route::group(['middleware' => ['auth', 'permission']], function () {
    /**
     * User Routes
     */
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');
        Route::get('/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/create', [UsersController::class, 'store'])->name('users.store');
        Route::get('/{user}/show', [UsersController::class, 'show'])->name('users.show');
        Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
        Route::patch('/{user}/update', [UsersController::class, 'update'])->name('users.update');
        Route::delete('/{user}/delete', [UsersController::class, 'destroy'])->name('users.destroy');
    });

    /**
     * User Routes
     */
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', [PostsController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
        Route::post('/create', [PostsController::class, 'store'])->name('posts.store');
        Route::get('/{post}/show', [PostsController::class, 'show'])->name('posts.show');
        Route::get('/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
        Route::patch('/{post}/update', [PostsController::class, 'update'])->name('posts.update');
        Route::delete('/{post}/delete', [PostsController::class, 'destroy'])->name('posts.destroy');
    });

    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
});

Route::group(['middleware' => ['auth'], 'prefix' => 'siode', 'as' => 'siode.'], function () {
    Route::resource('dashboard', DashboardController::class);

    Route::group(['middleware' => ['auth'], 'prefix' => 'info-desa', 'as' => 'infodesa.'], function () {
        Route::post('wilayah-administratif/rw-autocomplete', [RwController::class, 'autocomplete'])->name('rw.autocomplete');
        Route::resource('wilayah-administratif/rw', RwController::class);
        Route::resource('wilayah-administratif/rt', RtController::class);
        Route::get('/identitas-desa', [IdentitasDesaController::class, 'index'])->name('identitas-desa.index');
        Route::patch('/update-desa/{desa}', [IdentitasDesaController::class, 'update'])->name('identitas-desa.update');
        // Route::resource('identitas-desa', IdentitasDesaController::class);
        // Route::resource('wilayah-administratif/kampung', KpController::class);

    });
    Route::group(['middleware' => ['auth'], 'prefix' => 'kependudukan', 'as' => 'kependudukan.'], function () {
        Route::post('kartu-keluarga/anggota-keluarga/autocomplete-search', [KartuKeluargaAnggotaController::class, 'autocompleteSearch'])->name('kartu-keluarga.anggota-keluarga.autocomplete');
        Route::get('kartu-keluarga/kartu-keluarga/view-delete', [KartuKeluargaController::class, 'viewDelete'])->name('kartu-keluarga.view-delete');
        Route::get('kartu-keluarga/restore/{kartu_keluarga}', [KartuKeluargaController::class, 'restore'])->name('kartu-keluarga.restore');
        Route::delete('kartu-keluarga/kill/{kartu_keluarga}', [KartuKeluargaController::class, 'kill'])->name('kartu-keluarga.kill');
        Route::resource('kartu-keluarga/anggota-keluarga', KartuKeluargaAnggotaController::class);
        Route::resource('kartu-keluarga/kepala-keluarga', KartuKeluargaController::class);
        Route::get('kelompok', [KelompokController::class, 'index'])->name('kelompok.index');

    });
    Route::group(['middleware' => ['auth'], 'prefix' => 'layanan-surat', 'as' => 'surat.'], function () {
        Route::get('/cetak-surat/{id}/{slug}/buat', [CetakSuratController::class, 'create'])->name('buat-surat');
        Route::get('/cetak-surat', [CetakSuratController::class, 'index'])->name('cetak-surat.index');
        Route::get('/cetak-surat/{cetak_surat}/edit', [CetakSuratController::class, 'edit'])->name('cetak-surat.edit');
        Route::get('/cetak-surat/{cetak_surat}', [CetakSuratController::class, 'show'])->name('cetak-surat.show');
        Route::patch('/cetak-surat/{cetak_surat}', [CetakSuratController::class, 'update'])->name('cetak-surat.update');
        Route::patch('/cetak-surat/{cetak_surat}/arsip', [CetakSuratController::class, 'arsip'])->name('cetak-surat.arsip');
        Route::delete('/cetak-surat/{cetak_surat}', [CetakSuratController::class, 'destroy'])->name('cetak-surat.destroy');
        Route::post('/cetak-surat/{id}/{slug}', [CetakSuratController::class, 'store'])->name('cetak-surat.store');
        Route::get('cetak-surat/{id}/{slug}', [CetakSuratController::class, 'indexView'])->name('surat.indexView');
        Route::get('/pilih-surat', [SuratController::class, 'layanan_surat'])->name('surat.layanan_surat');
        Route::resource('/surat', SuratController::class);
    });
    Route::group(['middleware' => ['auth'], 'prefix' => 'bukuadministrasidesa', 'as' => 'buku.'], function () {
        Route::get('umum', [UmumController::class, 'index'])->name('umum.index');
        Route::get('bukupenduduk', [BukupendudukController::class, 'index'])->name('bukupenduduk.index');
        Route::get('kearsipan', [BukukearsipanController::class, 'index'])->name('kearsipan.index');
        Route::get('kearsipan/sarpras', [BukukearsipanController::class, 'sarpras'])->name('kearsipan.sarpras.sarpras');
        Route::get('kearsipan/sarprascreate', [BukukearsipanController::class, 'sarprascreate'])->name('kearsipan.sarpras.sarprascreate');
        Route::post('kearsipan/sarprasstore', [BukukearsipanController::class, 'sarprasstore'])->name('kearsipan.sarpras.sarprasstore');
    });

    Route::group(['middleware' => ['auth'], 'prefix' => 'arsipdesa', 'as' => 'arsip-desa.'], function () {
        Route::get('kearsipan/peta', [BukukearsipanController::class, 'petalokasi'])->name('kearsipan.peta.petalokasi');
    });

    Route::group(['middleware' => ['auth'], 'prefix' => 'beranda', 'as' => 'beranda.'], function () {
        Route::get('beranda', [BerandaController::class, 'index'])->name('beranda.index');
    });

});
//// ROUTE UNTUK DROPDOWN WILAYAH ////
Route::get('dependent-dropdown', [DependentDropdownController::class, 'index'])->name('dependent-dropdown.index');
Route::post('dependent-dropdown-city', [DependentDropdownController::class, 'store'])->name('dependent-dropdown.store.city');
Route::post('dependent-dropdown-district', [DependentDropdownController::class, 'storeDistrict'])->name('dependent-dropdown.store.district');
Route::post('dependent-dropdown-village', [DependentDropdownController::class, 'storeVillage'])->name('dependent-dropdown.store.village');