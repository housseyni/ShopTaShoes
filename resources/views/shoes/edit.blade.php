{{-- @extends('layout')

@section('main')
<h1>Modifier la chaussure</h1>
<form action="/shoes" method="post">
    @csrf
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
@endsection --}}





@extends('layout')

@section('main')
@if($errors->any())
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

    <div class="max-w-md mx-auto mt-8 bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Modifier la chaussure</h1>
        <form action="/shoes/{{$shoe->id}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-4">
                <label for="Nom" class="block text-sm font-medium text-gray-600">Nom :</label>
                <input type="text" id="nom" name="nom" value="{{$shoe->nom}}"class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
                <label for="Marque" class="block text-sm font-medium text-gray-600">Marque :</label>
                <input type="text" id="marque" name="marque" value="{{$shoe->marque}}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
                <label for="Taille" class="block text-sm font-medium text-gray-600">Taille :</label>
                <input type="number" id="taille" name="taille" value="{{$shoe->taille}}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
                <label for="Couleur" class="block text-sm font-medium text-gray-600">Couleur :</label>
                <input type="text" id="couleur" name="couleur" value="{{$shoe->couleur}}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-4">
                <label for="Prix" class="block text-sm font-medium text-gray-600">Prix :</label>
                <input type="number" id="prix" name="price" value="{{$shoe->price}}" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Soumettre</button>
        </form>
    </div>
@endsection
