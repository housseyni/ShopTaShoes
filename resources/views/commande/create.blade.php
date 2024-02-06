<x-app-layout>
  <x-slot name="header">
    <div class="container mx-auto mt-8">
      <h2 class="text-3xl font-semibold mb-4">Passer la commande</h2>
      <form action="{{ route('commande.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <label for="nom" class="block font-medium text-lg">Nom</label>
          <input type="text" id="nom" name="nom" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required />
        </div>
        <div>
          <label for="prenom" class="block font-medium text-lg">Prénom</label>
          <input type="text" id="prenom" name="prenom" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required />
        </div>
        <div>
          <label for="adresse" class="block font-medium text-lg">Adresse</label>
          <input type="text" id="adresse" name="adresse" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required />
        </div>
        <div>
          <label for="numero_carte" class="block font-medium text-lg">Numéro de carte bancaire</label>
          <input type="text" id="numero_carte" name="numero_carte" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required minlength="16" maxlength="16" />
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Confirmer la commande
        </button>
      </form>
    </div>
  </x-slot>
</x-app-layout>