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

                      <div class="container mx-auto mt-8">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                          @foreach ($shoes as $shoe)
                            <div class="bg-white p-4 rounded-lg shadow-md">
                              <img src="/img/{{ $shoe->image_path }}" alt="{{ $shoe->nom }}" class="w-full h-48 object-cover mb-4 aspect-ratio">
                  
                              <h2 class="text-xl font-semibold mb-2">{{ $shoe->nom }}</h2>
                              <p class="text-gray-600">{{ $shoe->marque }}</p>
                              <p class="text-green-500 font-semibold mt-2 mb-4">{{ $shoe->price }}€</p>
                  
                              <form action="{{ route('shoes.show', $shoe->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:opacity-80">Voir les détails</button>
                               </form>
                            </div>
                          @endforeach
                        </div>
                </div>

        </x-slot>
    </x-app-layout>
</div>