{{-- @extends('layout')

@section('main')
<h1>Toutes mes chaussures <a href="/shoes/create">+</a></h1>
<table class="min-w-full border rounded-lg overflow-hidden">
    <thead class="bg-gray-800 text-white">

    <tr>
        <th class="py-2 px-4">
            Id
        </th>

        <th class="py-2 px-4">
            Nom
        </th>

        <th class="py-2 px-4">
            Marque
        </th>

        <th class="py-2 px-4">
            Taille
        </th>

        <th class="py-2 px-4">
            Couleur
        </th>

        <th class="py-2 px-4">
            Prix
        </th>

        <th class="py-2 px-4">
            Voir cette chaussure
        </th>

        <th class="py-2 px-4">
            Modifier une chaussure
        </th>
        <th class="py-2 px-4">
           Supprimer une chaussure
        </th>
    </tr>
    </thead>
    @foreach( $shoes as $shoe)
    <tr>
        <td>
            {{ $shoe->id}}

        </td>
        <td>
            {{ $shoe->nom}}
        </td>
        <td>
            {{ $shoe->marque}}
        </td>
        <td>
            {{ $shoe->taille}}
        </td>
        <td>
            {{ $shoe->couleur}}
        </td>

        <td>
            {{ $shoe->price}}
        </td>
        <td>
            <a href="/shoes/{{ $shoe['id'] }}"> Voir plus d'informations
        </td>

        <td>
            <a href="/shoes/{{ $shoe['id'] }}/edit"> Modifier une chaussures
        </td>

        <td>
            <form method="post" action="/shoes/{{$shoe->id}}">
                @method("DELETE")
                @csrf
                <button>X </button>
            </form>
        </td>

    </tr>


    @endforeach
</table> --}}



@extends('layout')

@section('main')
    <div class="max-w-4xl mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4 flex items-center justify-between">
            Toutes mes chaussures <a href="/shoes/create" class="text-green-500 text-sm ml-2">+</a>
        </h1>
        <table class="min-w-full border rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4">Id</th>
                    <th class="py-2 px-4">Nom</th>
                    <th class="py-2 px-4">Marque</th>
                    <th class="py-2 px-4">Taille</th>
                    <th class="py-2 px-4">Couleur</th>
                    <th class="py-2 px-4">Prix</th>
                    <th class="py-2 px-4">Voir cette chaussure</th>
                    <th class="py-2 px-4">Modifier une chaussure</th>
                    <th class="py-2 px-4">Supprimer une chaussure</th>
                </tr>
            </thead>
            @foreach($shoes as $shoe)
                <tr>
                    <td class="py-2 px-4">{{ $shoe->id}}</td>
                    <td class="py-2 px-4">{{ $shoe->nom}}</td>
                    <td class="py-2 px-4">{{ $shoe->marque}}</td>
                    <td class="py-2 px-4">{{ $shoe->taille}}</td>
                    <td class="py-2 px-4">{{ $shoe->couleur}}</td>
                    <td class="py-2 px-4">{{ $shoe->price}}</td>
                    <td class="py-2 px-4">
                        <a href="/shoes/{{ $shoe->id }}" class="text-blue-500 hover:underline">Voir plus d'informations</a>
                    </td>
                    <td class="py-2 px-4">
                        <a href="/shoes/{{ $shoe->id }}/edit" class="text-yellow-500 hover:underline">Modifier une chaussure</a>
                    </td>
                    <td class="py-2 px-4">
                        <form method="post" action="/shoes/{{$shoe->id}}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                        </form>
                    </td>

                    
                </tr>
            @endforeach
        </table>
    </div>
@endsection
