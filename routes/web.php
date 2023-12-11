<?php

use App\Http\Controllers\Api\ShoeController as ApiShoeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CategorieController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/shoes', [ShoeController::class, 'index'])->name('shoe.index');

Route::get('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoe.show');

Route::get('/shoes/create', [ShoeController::class, 'create'])->name('shoe.create');

Route::get('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoe.show');

Route::get('/shoes/{shoe}/edit', [ShoeController::class, 'edit'])->name('shoe.edit');

Route::post('/shoes}', [ShoeController::class, 'show'])->name('shoe.store');

Route::patch('/shoes', [ShoeController::class, 'show'])->name('shoe.update');

Route::delete('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoe.destroy');


// Route::resource('shoes', ShoeController::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function () {
        return view('admin/admin-panel');
    })->name('administration')->middleware('is_admin');
});

Route::get('/test-livewire', function () {
    return view('counter-container');
});



// Route::get('/panier', function () {
//     return view('panier');
// });

Route::get('/panier', [PanierController::class, 'afficherPanier'])->name('panier.index');

Route::delete('/panier/supprimer/{id}', [PanierController::class, 'supprimerDuPanier'])->name('panier.supprimer');

Route::post('/panier/ajouter/{shoeId}', [PanierController::class, 'ajouterAuPanier'])->name('panier.ajouter');

Route::get('/categories', [CategorieController::class, 'afficherCategories'])->name('categories.index');
