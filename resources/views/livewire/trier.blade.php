<div>


    <x-app-layout>
        <x-slot name="header">

            <div class="bg-gray-100">

                <div class="flex justify-between mb-4 ">
                    <div>
                        <label for="tri">Trier par :</label>
                        <select wire:model="tri" class="ml-2" id="tri">
                            <option wire:click="trierParNom" value="nom">Nom</option>
                            <option wire:click="trierParPrix" value="price">Prix</option>
                        </select>
                    </div>
                </div>

                <div class="container mx-auto mt-25">
                    <h1 class="text-3xl font-semibold mb-4">Toute Nos Chaussures</h1>
                    <div style="position: relative; display: inline-block;">

                    </div>


                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                        @foreach ($shoes as $shoe)
                        <div class="bg-gray-200 p-4 rounded-lg shadow w-full h-full">
                            <img src="/img/{{ $shoe->image_path }}" alt="{{ $shoe->nom }}" class="w-full h-1/2 object-cover mb-8">


                            <!-- Adjusted height to maintain aspect ratio -->

                            <h2 class="text-xl font-semibold mb-2">{{ $shoe->nom }}</h2>
                            <p class="text-gray-700">{{ $shoe->marque }}</p>
                            <p class="text-gray-800 font-semibold mt-2 mb-8">{{ $shoe->price }}€ </p>


                            <!-- Ajout du formulaire pour afficher la chaussures  -->

                            <form action="{{ route('shoes.show', $shoe->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-full mb-100">Afficher plus de details</button>
                                <!-- <button type="button" wire:click="ajouterAuPanier({{ $shoe->id }})" class="bg-red-500 text-white px-4 py-2 rounded-full mb-100">Ajouter au panier</button> -->
                            </form>





                        </div>
                        @endforeach

                    </div>
                </div>

        </x-slot>
    </x-app-layout>



</div>