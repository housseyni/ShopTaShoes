{{-- @extends('layout')

@section('main')


<h1>Une seule chaussures</h1>
<img src="/img/{{$shoe->image_path}}" alt = "image de chaussure">
<ul>
    <li>
        {{ $shoe->id}}
    </li>
    <li>
        {{ $shoe->nom}}
    </li>
    <li>
        {{ $shoe->marque}}
    </li>
    <li>
        {{ $shoe->taille}}
    </li>
    <li>
        {{ $shoe->couleur}}
    </li>
    <li>
        {{ $shoe->price}}
    </li>
</ul>



@endsection --}}




@extends('layout')

@section('main')
    <div class="max-w-xl mx-auto mt-8 bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Détails de la chaussure</h1>
        <img src="/img/{{ $shoe->image_path }}" alt="Image de chaussure" class="mb-4 rounded-lg">

        <ul class="list-disc ml-4">
            <li class="mb-2">
                <span class="font-bold">ID:</span> {{ $shoe->id }}
            </li>
            <li class="mb-2">
                <span class="font-bold">Nom:</span> {{ $shoe->nom }}
            </li>
            <li class="mb-2">
                <span class="font-bold">Marque:</span> {{ $shoe->marque }}
            </li>
            <li class="mb-2">
                <span class="font-bold">Taille:</span> {{ $shoe->taille }}
            </li>
            <li class="mb-2">
                <span class="font-bold">Couleur:</span> {{ $shoe->couleur }}
            </li>
            <li class="mb-2">
                <span class="font-bold">Prix:</span> {{ $shoe->price }}
            </li>

            <li class="mb-2">
                <span class="font-bold">Prroprietaire:</span> {{ $shoe->owner->name}}
            </li>
            
            
            
        </ul>
    </div>

  
@endsection
