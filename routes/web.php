<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\master;

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


Route::get('/',[master::class,"index"])->name('index');
Route::get('blog',[master::class,"Blog"])->name('blog');
Route::get('about',[master::class,"about"])->name('about');
Route::get('causes',[master::class,"causes"])->name('causes');
Route::get('events',[master::class,"events"])->name('events');
Route::get('contact',[master::class,"contact"])->name('contact');

//Causes

Route::get('Health',[master::class,'Health'])->name('Health');
Route::get('Relief-Program',[master::class,'Relief'])->name('Relief');
Route::get('Agriculture',[master::class,'Agriculture'])->name('Agriculture');
Route::get('Economic-Empowerment',[master::class,'EconomicEmpowerment'])->name('Economic-Empowerment');
Route::get('Building-Mosques',[master::class,'BuildingMosques'])->name('Building-Mosques');
Route::get('DAAWAH-RAMADAN-AND-QURBAN',[master::class,'DAAWAH_RAMADAN_AND_QURBAN'])->name('DAAWAH-RAMADAN-AND-QURBAN');
Route::get('Religious-Education-and-Quran-Memorization',[master::class,'ReligiousEducation'])->name('ReligiousEducation');
