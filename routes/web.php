<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\InscriptionController;

Route::get('/', [FrontController::class, 'index'])->name('Accueil');
Route::get('/about', [FrontController::class, 'about'])->name('Apropos');
Route::get('/panelistes', [FrontController::class, 'panelistes'])->name('Panelistes');
Route::get('/schedule', [FrontController::class, 'calendrier'])->name('calendrier');
Route::get('/stands', [FrontController::class, 'stands'])->name('stands');
Route::get('/b2b', [FrontController::class, 'b2b'])->name('b2b');
Route::get('/b2g', [FrontController::class, 'b2g'])->name('b2g');
Route::get('/tables-rondes', [FrontController::class, 'tablesRondes'])->name('tables-rondes');
Route::get('/partenaires', [FrontController::class, 'partenaires'])->name('partenaires');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/test', [FrontController::class, 'test'])->name('test');

Route::get('/inscriptions', [InscriptionController::class, 'index'])->name('inscriptions');