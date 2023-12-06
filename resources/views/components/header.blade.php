<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex items-center justify-between">
        <h1 class="text-2xl font-semibold">Houss Shop</h1>
        <nav class="flex space-x-4">
            <a href="/shoes" class="hover:text-gray-300">Accueil</a>
            <a href="/categories" class="hover:text-gray-300">Catégories</a>
            <a href="/contact" class="hover:text-gray-300">Contact</a>
            {{-- <a href="/panier" class="hover:text-gray-300">Panier</a> --}}
            <a href="{{ route('panier.index') }}" class="hover:text-gray-300">Panier</a>
            {{-- <a href="{{ route('panier.index', ['panierId' => $paniers->id]) }}" class="hover:text-gray-300">Panier</a> --}}


        </nav>
    </div>
</header>