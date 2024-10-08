<?php

use App\Http\Controllers\TambahLeadController;
use Illuminate\Support\Facades\Route;

Route::get('/tambah-lead', [TambahLeadController::class, 'index'])->name('tambah_lead.index');
Route::post('/tambah-lead', [TambahLeadController::class, 'store'])->name('tambah_lead.store');
