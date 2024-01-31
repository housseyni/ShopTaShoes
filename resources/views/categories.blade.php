@extends('layouts.app')

@section('content')
<x-header />
<div class="container mx-auto mt-8">
    <h2 class="text-3xl font-semibold mb-4">Toutes les Catégories de Chaussures</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($categories as $categorie)
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">{{ $categorie->nom}}</h2>
            <p class="text-gray-700">{{ $categorie->description }}</p>

            {{-- <a href="{{ route('chaussures.parCategorie', $categorie->id) }}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-full inline-block">Voir les chaussures</a> --}}
        </div>
        @endforeach
    </div>
</div>
@endsection



{{-- @section('content')
    <x-header/>

    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-8">Découvrez nos Catégories de Chaussures</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($categories as $categorie)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <img src="/img/{{ $categorie->image_path }}" alt="{{ $categorie->ame }}" class="w-full h-40 object-cover mb-4 rounded-md">
<h2 class="text-xl font-semibold mb-2">{{ $categorie->name }}</h2>
<p class="text-gray-700 mb-4">{{ $categorie->description }}</p>

<a href="{{ route('chaussures.parCategorie', $category->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition duration-300">Voir les chaussures</a>
</div>
@endforeach
</div>
</div>
@endsection --}}