<div class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded shadow-lg">
    <h1 class="text-4xl font-bold mb-6 text-indigo-700">La liste de mes chaussures</h1>

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
            @foreach (Auth::user()->shoes as $shoe)
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
