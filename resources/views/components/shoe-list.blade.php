<div class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded shadow-lg">
    <h1 class="text-4xl font-bold mb-6 text-indigo-700">La liste de mes chaussures</h1>

    <table class="min-w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="py-2 px-4 border-b text-left">ID</th>
                <th class="py-2 px-4 border-b text-left">Nom</th>
                <th class="py-2 px-4 border-b text-left">Marque</th>
                <th class="py-2 px-4 border-b text-left">Taille</th>
                <th class="py-2 px-4 border-b text-left">Couleur</th>
                <th class="py-2 px-4 border-b text-left">Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach (Auth::user()->shoes as $shoe)
                <tr>
                    <td class="py-2 px-4 border-b text-left">{{ $shoe->id }}</td>
                    <td class="py-2 px-4 border-b text-left">{{ $shoe->nom }}</td>
                    <td class="py-2 px-4 border-b text-left">{{ $shoe->marque }}</td>
                    <td class="py-2 px-4 border-b text-left">{{ $shoe->taille }}</td>
                    <td class="py-2 px-4 border-b text-left">{{ $shoe->couleur }}</td>
                    <td class="py-2 px-4 border-b text-left">{{ $shoe->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
