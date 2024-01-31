<?php

use App\Http\Controllers\Api\ShoeController as ApiShoeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Panier;


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

Route::get('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoes.show');

Route::get('/shoes/create', [ShoeController::class, 'create'])->name('shoes.create');

Route::get('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoes.show');

Route::get('/shoes/{shoe}/edit', [ShoeController::class, 'edit'])->name('shoes.edit');

Route::post('/shoes}', [ShoeController::class, 'show'])->name('shoes.store');

Route::patch('/shoes', [ShoeController::class, 'show'])->name('shoes.update');

Route::delete('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoes.destroy');


// Route::resource('shoes', ShoeController::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('shoes.index');
    })->name('shoes.index');

    Route::get('/admin', function () {
        return view('admin/admin-panel');
    })->name('administration')->middleware('is_admin');
});

Route::get('/test-livewire', function () {
    return view('counter-container');
});


Route::get('/commande/create', function () {
    return view('commande.create');
})->name('commande.create');


Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');



Route::post('/commande', function (Request $request) {
    // Validation des données du formulaire ici

    // Créer une nouvelle commande en utilisant les données soumises
    $commande = new Commande();
    $commande->nom = $request->input('nom');
    $commande->prenom = $request->input('prenom');
    $commande->adresse = $request->input('adresse');
    $commande->numero_carte = $request->input('numero_carte');
    // Ajoutez d'autres champs de votre modèle Commande si nécessaire
    $commande->save();

    Panier::truncate();

    // Redirection vers la page de confirmation avec un message de succès
    return redirect()->route('confirmation')->with('success', 'Commande passée avec succès !');
})->name('commande.store');



// Route::get('/panier', function () {
//     return view('panier');
// });

Route::get('/panier', [PanierController::class, 'afficherPanier'])->name('panier.index');

Route::delete('/panier/supprimer/{id}', [PanierController::class, 'supprimerDuPanier'])->name('panier.supprimer');

Route::post('/panier/ajouter/{shoeId}', [PanierController::class, 'ajouterAuPanier'])->name('panier.ajouter');

Route::get('/categories', [CategorieController::class, 'afficherCategories'])->name('categories.index');
