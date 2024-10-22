<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Schema;


Route::get('/', function () {
    return redirect('/buku'); // Mengarahkan ke halaman buku
});

// Route untuk CRUD buku
Route::resource('buku', BukuController::class);
