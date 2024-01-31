<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto mt-8">
            <h2 class="text-3xl font-semibold mb-4">Confirmation de commande</h2>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Votre commande a été passée avec succès !</p>
                <p>Merci pour votre achat.</p>
                <!-- Ajoutez d'autres détails de la commande si nécessaire -->
            </div>
            <a href="{{ route('shoes.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Retour à l'accueil</a>
        </div>
    </x-slot>
</x-app-layout>