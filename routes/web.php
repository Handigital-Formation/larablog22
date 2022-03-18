<?php

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

// Route::get('/', function () {
//     $tasks = [
//         'Aller faire les courses',
//         'Aller à la gym',
//         'Dormir'
//     ];
    
//     return view('home',[
//         'maVar' => request('name'),
//         'tasks' => $tasks
//     ]);
// });

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/about', [PagesController::class, 'about']);

use App\Http\Controllers\ProjectController;
// Route::get('/project', [ProjectController::class, 'index']);
// Route::get('/project/create', [ProjectController::class, 'create']);
// Route::post('/project', [ProjectController::class, 'store']);
//Route::get('/project/{id}', [ProjectController::class, 'show']);
Route::resource('/project', ProjectController::class);
