<?php
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/user/{users}', [MainController::class, 'show']);
    Route::get('/user', [MainController::class, 'userlerigetir'] ); 
    Route::get('/xeberler', [MainController::class, 'xeberlerigetir'] );  
    Route::get('/xeberler/{xeberler}', [MainController::class, 'xeberler_id']);
    
   
});

Route::post('/xeberler', [MainController::class, 'xeberleriyuklemek'] );
Route::post('/user', [MainController::class, 'user'] );



// /kesler yoluna gedecek maincontrolllerde newsdata... isledecek
Route::post('/kesler', [MainController::class, 'newsdatayuklemek']);
//bu get bir neferin melumati limitli sayda ala bilmesi ucun yaradilmisdir
Route::get('/s',[MainController::class, 'melumatialmaqicazesi'])->middleware('throttle: 5,1'); // 1 deqiqede 5 defe melumati almaq icazesi verilir