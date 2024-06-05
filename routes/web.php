<?php

use App\Http\Controllers\master;
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

Route::get('/', [master::class, "index"])->name('/');
Route::get('index', [master::class, "index"])->name('index');
Route::get('blog', [master::class, "Blog"])->name('blog');
Route::get('about', [master::class, "about"])->name('about');
Route::get('causes', [master::class, "causes"])->name('causes');
Route::get('events', [master::class, "events"])->name('events');
Route::get('contact', [master::class, "contact"])->name('contact');

//Causes

Route::get('Health', [master::class, 'Health'])->name('Health');
Route::get('Relief-Program', [master::class, 'Relief'])->name('Relief');
Route::get('Agriculture', [master::class, 'Agriculture'])->name('Agriculture');
Route::get('Economic-Empowerment', [master::class, 'EconomicEmpowerment'])->name('Economic-Empowerment');
Route::get('Building-Mosques', [master::class, 'BuildingMosques'])->name('Building-Mosques');
Route::get('DAAWAH-RAMADAN-AND-QURBAN', [master::class, 'DAAWAH_RAMADAN_AND_QURBAN'])->name('DAAWAH-RAMADAN-AND-QURBAN');
Route::get('Religious-Education-and-Quran-Memorization', [master::class, 'ReligiousEducation'])->name('ReligiousEducation');

// Admin Routes


// Protected routes
    Route::get('admin-dashboard', [Master::class, 'addDashboard'])->name('admin-dashboard');
    Route::get('add-cause', [Master::class, 'addCause'])->name('add-cause');
    Route::get('add-event', [Master::class, 'addEvent'])->name('add-event');
    Route::get('all-events', [Master::class, 'allEvent'])->name('all-events');
    Route::get('all-causes', [Master::class, 'allCauses'])->name('all-causes');
    Route::get('delete/event/{id}', [Master::class, 'deleteEvent']);
    Route::get('delete/cause/{id}', [Master::class, 'deleteCause']);
    Route::get('event-details/{id}', [Master::class, 'eventDetails']);
    Route::get('cause-details/{id}', [Master::class, 'causeDetails']);
    Route::get('admin-register', [Master::class, 'adminRegister'])->name('admin-register');
    Route::post('auth-register', [Master::class, 'registerUser'])->name('auth-register');

    Route::get('edit/event/{id}', [Master::class,'editEvent']);
    Route::post('store-edit-event', [Master::class, 'storeEditEvent'])->name('store-edit-event');


    Route::get('edit/cause/{id}', [Master::class,'editCause']);
    Route::post('store-edit-cause', [Master::class, 'storeEditCause'])->name('store-edit-cause');



Route::get('admin-login', [Master::class, 'login'])->name('admin-login');

Route::get('admin-logout', [Master::class, 'logout'])->name('admin-logout');

Route::post('store-cause', [Master::class, 'storeCause'])->name('store-cause');
Route::post('store-event', [Master::class, 'storeEvent'])->name('store-event');
Route::post('auth-check', [Master::class, 'loginUser'])->name('auth-check');
