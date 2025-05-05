<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CustomerController;

// Halaman login
Route::get('/', function () {
    return view('login');
})->name('login.form');

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Homepage
Route::get('/homepage', [LeadController::class, 'index'])->name('homepage');
Route::post('/homepage', [AuthController::class, 'homepage'])->name('homepage');

// Leads
Route::get('/leads/create', [LeadController::class, 'create'])->name('leads.create');
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');

// Project
Route::get('/project/create/{lead}', [ProjectController::class, 'create'])->name('project.create'); // ← letakkan duluan
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show'); // ← setelah 'create'

// Halaman produk
Route::get('/produk', function () {
    return view('produk');
})->name('produk.index');

// Halaman customer
Route::get('/customer', function () {
    return view('customer');
})->name('customer.index');

// Delete
Route::delete('/leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy');

// Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');

