<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('themaScroll.index');
})->name('index');



Route::get('/buku1', function () {
    return view('data.buku1');
});


Route::get('/buku2', function () {
    return view('data.buku2');
});

    Route::get('/buku3', function () {
        return view('data.buku3');
    });
    
        Route::get('/buku4', function () {
            return view('data.buku4');
        
        }); 
            Route::get('/buku5', function () {
                return view('data.buku5');
            });
                Route::get('/buku6', function () {
                    return view('data.buku6');
                
                });
                    Route::get('/buku7', function () {
                        return view('data.buku7');
                    
                    });
                        Route::get('/buku8', function () {
                            return view('data.buku8');
                
                        });
                            Route::get('/buku9', function () {
                                return view('data.buku9');
                
                            });
                
            
                                    

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('registration.post');
Route::get('layout', [AuthController::class, 'layout'])->name('layout');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
