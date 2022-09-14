<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;
use Zems\lrArtisan\ZemsArtisan;

// Route::get('/zems_cmd', function () {
//     // return 'welcome Sir';
//     return view('lrartisan::dashboard');
// });
Route::group(['prefix' => 'zems_cmd'], function () {
    Route::controller(ZemsArtisan::class)->group(function(){
        Route::get('/', 'home')->name('zems_cmd'); 
        Route::get('create', 'create')->name('create'); 
        Route::post('cmd/{ext?}/{id?}', 'cmd')->name('cmd'); 
        Route::post('migrate/{ext?}/{id?}', 'migrate')->name('migrate'); 
        Route::get('tbl/{ext}', 'get_column')->name('tbl');    
        Route::get('migrate_list/', 'migrate_list')->name('migrate_list');
        Route::get('del_tbl/{tbl}', 'del_tbl')->name('del_tbl');
        Route::get('del_column/{id}', 'del_column')->name('del_column');
    });
});