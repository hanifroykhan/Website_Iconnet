<?php

use App\Http\Controllers\AddvendorController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\PPIController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AktivasiController;
use App\Http\Controllers\DataMapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TescomController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use App\Imports\Maps;
use App\Exports\dataExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Odp;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

Route::get('/',function(){
    return view('login.login');
})->name('login');
Route::get('/register',function(){
    return view('register.register');
});

Route::get('/aktivasi', function () {
    return view('aktivasi');

});


Route::post('/login',[LoginController::class,'login']);
Route::post('/register/regis',[LoginController::class,'register']);
Route::group(['middleware'=>['auth','role:1']],function(){

    Route::get('/logout',[LoginController::class,'logout']);
    Route::get('/data', [DataController::class, 'index']);
    Route::post('/import', [DataController::class, 'import']);
    Route::get('/export',[DataController::class,'export']);
    Route::get('/caridatatable', [DataController::class,'caridatatable']);
    Route::get('/detaildata/{id}', [DataController::class, 'detail']);
    Route::get('/hapus/{id}', [DataController::class, 'hapus']);
    Route::get('/updateView/{id}/data', [DataController::class, 'updateView']);
    Route::post('/update/{id}/data', [DataController::class, 'update']);
    Route::get('/surveyView/{id}/survey', [SurveyController::class, 'surveyView']);
    Route::post('/updateSurvey/{id}', [SurveyController::class, 'updateSurvey']);
    Route::get('/tescomView/{id}/tescom', [TescomController::class, 'tescomView']);
    Route::post('/updateTescom/{id}/tescom', [TescomController::class, 'updateTescom']);
    Route::post('/updateDoc/{id}/doc', [TescomController::class, 'updateDoc']);
    Route::get('/kirimppi', [PPIController::class, 'viewKirim']);
    Route::post('/cari', [PPIController::class, 'cari']);
    Route::post('/mail',[PPIController::class,'mail']);
    Route::get('/vendor',[VendorController::class,'index']);
    Route::post('/addvendor/vendor',[VendorController::class,'vendor']);
    Route::get('/updateview/{id}/vendor', [VendorController::class, 'updateView']);
    Route::post('/update/{id}/vendor', [VendorController::class, 'update']);
    Route::get('/hapus/{id}/vendor', [VendorController::class, 'hapus']);
    // Route::get('/datamap', [DataMapController::class, 'index']);
    // Route::post('/importmap',[DataMapController::class,'importmap']);
    Route::get('/datamap',function(){
        $datamaps = Odp::paginate(10);
        return view('datamap',['datamaps'=>$datamaps]);
    });
    Route::post('/importmap',function(){
        Excel::import(new Maps, request()->file('file'));
        return redirect('/datamap');
    });

  
    Route::get('/maps',[MapsController::class,'index']);
    Route::post('/proses',[MapsController::class,'proses']);
    Route::post('/maps/tambah',[MapsController::class,'tambahKoor']);
    Route::post('/caridata', [DataController::class,'cari']);
    Route::post('/carivendor', [VendorController::class,'cari']);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::prefix('aktivasi')->group(function(){
        Route::resource('vendor', AktivasiController::class);
        Route::get('update-aktivasi', [AktivasiController::class, 'updatedActivity']);

    });
    Route::get('/file_upload',[FileUploadController::class,'index']);
    Route::post('/file_upload',[FileUploadController::class,'fileUpload'])->name('fileupload.store');







});


Route::group(['middleware'=>['auth','role:2']],function(){
    Route::get('/user',function(){
        return view('user');
    });
});

Route::get('/getNamaOdp', [MapsController::class,'getDetailKoor']);

Route::get('waping/send','WapingContoller@send');