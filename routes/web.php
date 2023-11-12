<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\bullController;

Route::get('/',[bullController::class,'index']); //Rota mostrar todos registro
Route::get('/bulls/create',[bullController::class,'create']);//Rota para os formulários de cadastro
Route::post('/bulls',[bullController::class,'store']); //Rota para enviar dados ao banco
Route::get('/bulls/{id}',[bullController::class,'show']); //Rota para pegar o id do front
