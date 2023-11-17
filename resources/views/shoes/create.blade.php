<!--
{{-- @extends('layout') --}}

{{-- @section('main') --}}
<h1>Ajouer une chaussures</h1>
<form action="/shoes" method="post">
    {{-- @csrf --}}
    <label for="Nom">Nom :</label>
    <input type="text" id="nom" name="Nom" required><br><br>

    <label for="Marque">Marque :</label>
    <input type="text" id="prix" name="Marque" required><br><br>

    <label for="Taille">Taille :</label>
    <input type="number" id="prix" name="Taille" required><br><br>

    <label for="Couleur">Couleur :</label>
    <input type="text" id="prix" name="Couleur" required><br><br>

    <label for="prix">Prix :</label>
    <input type="number" id="prix" name="Prix" required><br><br>


    <input type="submit" value="Soumettre">
</form>
{{-- @endsection --}}
-->


@extends('layout')

@section('main')
    <h1 class="text-2xl font-semibold mb-4">Ajouter une chaussure</h1>
    <form action="/shoes" method="post" class="bg-white p-8 rounded shadow-md max-w-md">
        @csrf
        <div class="mb-4">
            <label for="Nom" class="block text-sm font-medium text-gray-600">Nom :</label>
            <input type="text" id="nom" name="Nom" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="Marque" class="block text-sm font-medium text-gray-600">Marque :</label>
            <input type="text" id="marque" name="Marque" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="Taille" class="block text-sm font-medium text-gray-600">Taille :</label>
            <input type="number" id="taille" name="Taille" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="Couleur" class="block text-sm font-medium text-gray-600">Couleur :</label>
            <input type="text" id="couleur" name="Couleur" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="Prix" class="block text-sm font-medium text-gray-600">Prix :</label>
            <input type="number" id="prix" name="Prix" class="mt-1 p-2 w-full border rounded-md" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Soumettre</button>
    </form>
@endsection
