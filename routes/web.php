<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\CantactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos','index')->name('cursos.index');
//     Route::get('cursos/create','create')->name('cursos.create');
//     Route::post('cursos', 'store')->name('cursos.store');
//     Route::get('cursos/{curso}','show')->name('cursos.show');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
//     Route::put('cursos/{curso}', 'update')->name('cursos.update');
//     Route::delete('cursos/{curso', 'destroy')->name('cursos.destroy');
// });


// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', function(){

    Mail::to('juaisbel.flores@gmail.com')
        ->send(new CantactanosMailable);
        
    return "Mensaje enviado";


})->name('contactanos');

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria= null) {

//     if($categoria){
//         return "Welcome to the curse $curso, from the category $categoria";
//     }
//     else{
//         return "Welcome to the curse: $curso";
//     }
// });

