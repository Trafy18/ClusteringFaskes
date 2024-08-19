<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClusterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFaskesController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\WilayahController;

use App\Models\cluster;
use App\Models\Faskes;
use App\Models\Perhitungan;
use App\Models\Wilayah;
use Phpml\Clustering\KMeans\Cluster as KMeansCluster;

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
    return view('landingpage.index');
})->name('landingpage');

Route::get('/data', [DataFaskesController::class,'tampil_data']);


// Route::get('/about', function () {
//     return view('about');
// });

// login and signup
Route::get('/login', function () {
    return view('landingpage.login');
})->name('login');

Route::post('/login',[LoginController::class,'authenticate']);

Route::get('/signup', function () {
    return view('landingpage.signup');
})->name('signup');

Route::post('/signup', [RegisterController::class, 'store']);

//logout
Route::post('/logout', LogoutController::class)->name('logout');
// ADMIN
Route::middleware('auth')->group(function(){
    
});
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class, 'dashboard'])->name('admin');

    // Route::resource('/datafasilitaskesehatan', AdminController::class);

    //route data faskes
    Route::get('/datafasilitaskesehatan', [FaskesController::class, 'data_faskes'])->name('datafaskes')->middleware('auth');
    Route::resource('faskes', FaskesController::class);
    Route::get('export-csv', [FaskesController::class, 'exportCSV'])->name('export');
    Route::post('import-csv', [FaskesController::class, 'importCSV'])->name('import');
    Route::get('/datafasilitaskesehatan/tambah',[FaskesController::class,'create']);
    Route::get('/datafasilitaskesehatan/edit/{id_kota}',[FaskesController::class, 'edit']);
    Route::post('/datafasilitaskesehatan/simpan',[FaskesController::class, 'store']);
    Route::post('/datafasilitaskesehatan/update',[FaskesController::class, 'update']);
    Route::get('/datafasilitaskesehatan/hapus/{id_kota}', [FaskesController:: class, 'destroy']);
    
    // route data wilayah
    Route::get('/datawilayah', [WilayahController::class, 'index'])->name('datawilayah');
    Route::get('/datawilayah/tambah',[WilayahController::class,'create']);
    Route::get('/datawilayah/edit/{id_kota}',[WilayahController::class,'edit']);
    Route::post('/datawilayah/simpan',[WilayahController::class, 'store']);
    Route::post('/datawilayah/update',[WilayahController::class,'update']);
    Route::get('/datawilayah/delete/{id_kota}',[WilayahController::class,'destroy']);
    
    //route cluster
    Route::get('/centroid', [ClusterController::class, 'index'])->name('centroid');
    Route::get('/centroid/edit/{id_centroid}',[ClusterController::class,'edit']);
    Route::post('/centroid/simpan',[ClusterController::class, 'store']);
    Route::post('/centroid/update',[ClusterController::class,'update']);
    

    //route perhitungan
    Route::get('/perhitungan',[PerhitunganController::class,'index'])->name('perhitungan');
    Route::get('/hitung',[PerhitunganController::class,'hasil'])->name('perhitungan1');
    Route::get('/hitung2',[PerhitunganController::class,'hasil2'])->name('perhitungan2');
    Route::get('/hitung3',[PerhitunganController::class,'hasil3'])->name('perhitungan3');
    Route::get('/hitung4',[PerhitunganController::class,'hasil4'])->name('perhitungan4');
    Route::get('/hitung5',[PerhitunganController::class,'hasil5'])->name('perhitungan5');
    Route::get('/hitung6',[PerhitunganController::class,'hasil6'])->name('perhitungan6');

    
});






// Route::get('/profile', function () {
//     return view('user.profile');
// })->name('profile')->middleware('auth');