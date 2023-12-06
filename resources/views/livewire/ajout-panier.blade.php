

<div>
    

    <x-header/>



    <div class="flex justify-between mb-4">
        <div>
            <label for="tri">Trier par :</label>
            <select wire:model="tri" class="ml-2" id="tri">
                <option wire:click = "trierParNom" value="nom">Nom</option>
                <option wire:click="trierParPrix"value="price">Prix</option>
            </select>
        </div>
    </div>
    
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Toute Nos Chaussures</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($shoes as $shoe)
                <div class="bg-blue-200 p-4 rounded-lg shadow w-full h-full">
                    <img src="/img/{{ $shoe->image_path }}" alt="{{ $shoe->nom }}" class="w-full h-1/2 object-cover mb-8">
                    {{-- <img src="/img/{{ $shoe->image_path }}" alt="{{ $shoe->nom }}" class="w-96 h-72 object-cover mb-8"> --}}

                    <!-- Adjusted height to maintain aspect ratio -->

                    <h2 class="text-xl font-semibold mb-2">{{ $shoe->nom }}</h2>
                    <p class="text-gray-700">{{ $shoe->marque }}</p>
                    <p class="text-gray-800 font-semibold mt-2">{{ $shoe->price }}€ </p>

                    <!-- Ajout du formulaire pour ajouter au panier -->
                    <form action="{{ route('panier.ajouter', $shoe->id) }}" method="POST">
                        @csrf
                        {{-- <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-full">Ajouter au panier</button> --}}
                        <button type="button" wire:click="ajouterAuPanier({{ $shoe->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-full">Ajouter au panier</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

</div>
