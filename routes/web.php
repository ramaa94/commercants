<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendcontroller;


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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/demande',[Frontendcontroller::class,'demande']);
Route::get('/dossier',[Frontendcontroller::class,'dossier'] );

Route::get('/commission',[Frontendcontroller::class,'commission']);
Route::get('/ajoutF',[Frontendcontroller::class,'ajoutF']);
Route::get('/ajoutAct',[Frontendcontroller::class,'ajoutAct']);
Route::get('/ajoutP',[Frontendcontroller::class,'ajoutP'] );
Route::get('/commissionview',[Frontendcontroller::class,'commissionview'] );
// Route::get('/demandeview',[Frontendcontroller::class,'demandeview'] );
Route::get('/chart', [Frontendcontroller::class, 'chart']);


Route::get('/demandeview', function () {
    $demandes = DB::select('select * from commercants_demande');
    return view('frontend.demande_view',['demandes'=>$demandes]); 
  });
  Route::get('/edit',[Frontendcontroller::class,'edit'] );
  Route::get('/updatecommission',[Frontendcontroller::class,'updatecommission'] );


// Route::get('/demande', function () {
//     $data=commercants_family_activity::all();
//     return view('frontend.demande',['data'=>$data]);
// });
// Route::get('/demande','Frontendcontroller@demande'); 
 Route::post('/submitdemande',[Frontendcontroller::class,'savedemande']);

 Route::post('/submit',[Frontendcontroller::class,'saveF']);
 Route::post('/submitP',[Frontendcontroller::class,'saveP']);

 Route::post('/submitcommission',[Frontendcontroller::class,'savecommission']);
 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
