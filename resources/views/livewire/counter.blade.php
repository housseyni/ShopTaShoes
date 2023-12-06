<div>
 {{-- <div class="flex items-center justify-center space-x-4 p-4 bg-gray-100">
    {{-- The Master doesn't talk, he acts. --}}

    {{-- <input wire:model.live="username" type="text" class="border border-gray-300 p-2 rounded">
    <p class="text-gray-700">{{$username}}</p>
    

    <button wire:click="increment" class="bg-green-500 text-white px-4 py-2 rounded">+</button>

    <p class="text-gray-700">{{$count}}</p>

    <button wire:click="decrement" class="bg-red-500 text-white px-4 py-2 rounded">-</button>



    </div> --}} 

    <div>
        <input wire:model="nom" type = "text" />
        <input wire:model="marque" type ="text" />
        <x-button wire:click="add" >Ajouter</x-button>
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    
                    <x-th >ID</x-th>
                    <x-th >Nom</x-th>
                    <x-th >Marque</x-th>
                    <x-th >Taille</x-th>
                    <x-th >Couleur</x-th>
                    <x-th >Prix</x-th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shoes as $shoe)
                    <tr>
                        
                        <x-td >{{ $shoe->id }}</x-td>
                        <x-td >{{ $shoe->nom }}</x-td>
                        <x-td >{{ $shoe->marque }}</x-td>
                        <x-td >{{ $shoe->taille }}</x-td>
                        <x-td >{{ $shoe->couleur }}</x-td>
                        <x-td >{{ $shoe->price }}</x-td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
    </div>
</div>


