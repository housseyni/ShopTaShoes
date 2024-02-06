<div>
    <x-app-layout>
        <x-slot name="header">
            <div class="max-w-xl mx-auto mt-8 bg-white p-8 rounded shadow-md">

                <h1 class="text-2xl font-semibold mb-4">Détails de la chaussure</h1>

                <div style="position: relative; display: inline-block;">

                </div>
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
                        <span class="font-bold">Couleur:</span> {{ $shoe->couleur }}
                    </li>
                    <li class="mb-2">
                        <span class="font-bold">Prix:</span> {{ $shoe->price }}
                    </li>



                    <form action="{{ route('panier.ajouter', $shoe->id) }}" method="POST">
                        @csrf
                        <label for="taille">Choisissez votre taille :</label>
                        <select id="taille" name="taille">
                            @foreach($shoe->tailles as $taille)
                            <option value="{{ $taille->id }}">{{ $taille->taille }}</option>
                            @endforeach
                        </select>

                    </form>

                    <form action="{{ route('panier.ajouter', $shoe->id) }}" method="POST">
                        @csrf
                        <button type="button" wire:click="ajouterAuPanier({{ $shoe->id }})" class="bg-red-500 text-white px-4 py-2 rounded-full mb-100">Ajouter au panier</button>
                    </form>

                </ul>
            </div>


            <a href="/shoes" class="text-green-500 text-sm ml-2">Retour à la page d'acceuil</a>
            <div class="relative inline-block">
                <img src="/img/logo_navbar/panier.png" alt="..." class="w-6 h-auto object-contain" />
                <span class="absolute top-0 right-0 bg-red-500 text-white w-4 h-4 flex items-center justify-center rounded-full text-xs transform translate-x-1/2 -translate-y-1/2">{{$count}}</span>
            </div>
            
            
            
        </x-slot>
    </x-app-layout>

</div>