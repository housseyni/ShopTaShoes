{{--
@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Mon Panier</h2>

        <ul class="space-y-4">
            @foreach ($shoes as $shoe)
                <li class="flex justify-between items-center border-b pb-2">
                    <span>{{ $shoe->nom }}</span>
<span>{{ $shoe->price }}</span>
</li>
@endforeach
</ul>

<p class="text-xl mt-4">Total: {{ $total }}</p>
</div>
@endsection --}}



{{-- @extends('layouts.app')

@section('content')
<x-header/>
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Mon Panier</h2>

        <ul class="space-y-4">
            @foreach ($shoes as $shoe)
                <li class="flex justify-between items-center border-b pb-2">
                    <span>{{ optional($shoe)->nom }}</span>
<span>{{ optional($shoe)->price }}</span>
</li>
@endforeach
</ul>

<p class="text-xl mt-4">Total: {{ $total }}</p>
</div>
@endsection --}}





{{-- @extends('layouts.app')

@section('content')
    <x-header/>
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Mon Panier</h2>

        <ul class="space-y-4">
            @foreach ($shoes as $shoe)
                <li class="flex justify-between items-center border-b pb-2">
                    <span>{{ $shoe->nom }}</span>
<span>{{ $shoe->price }}</span>
</li>
@endforeach
</ul>

<p class="text-xl mt-4">Total: {{ $total }}</p>
</div>
@endsection --}}




{{--
@extends('layouts.app')

@section('content')
    <x-header/>
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Mon Panier</h2>

        <ul class="space-y-4">
            @foreach ($paniers as $panier)
            <li>
                {{ $panier->shoe->nom }} - {{ $panier->quantity }} pièces à {{ $panier->shoe->price }} € chacune

<!-- Formulaire de suppression -->
<form action="{{ route('panier.supprimer', ['id' => $panier->id]) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit">Supprimer</button>
</form>
</li>
@endforeach
</ul>

<p class="text-xl mt-4">Total: {{ $total }}</p>
</div>
@endsection --}}





{{--
@extends('layouts.app')

@section('content')
    <x-header/>
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Mon Panier</h2>

        @if(!empty($paniers))
            <ul class="space-y-4">
                @foreach ($paniers as $panier)
                    <li>
                        {{ $panier->shoe->nom }} - {{ $panier->quantity }} pièces à {{ $panier->shoe->price }} € chacune

<!-- Formulaire de suppression -->
<form action="{{ route('panier.supprimer', ['id' => $panier->id]) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit">Supprimer</button>
</form>

<!-- Lien vers le détail du panier -->
<a href="{{ route('panier.index', ['panierId' => $panier->id]) }}" class="hover:text-gray-300">Voir le panier</a>
</li>
@endforeach
</ul>
@else
<p>Aucun élément dans le panier.</p>
@endif

<p class="text-xl mt-4">Total: {{ $total }}</p>
</div>
@endsection
--}}





{{-- <x-app-layout>
    <x-slot name="header">


        <div class="container mx-auto mt-8">
            <h2 class="text-3xl font-semibold mb-4">Mon Panier</h2>

            @if(!empty($paniers))
            <ul class="space-y-4">
                @foreach ($paniers as $panier)
                <li class="border p-4 rounded-md shadow-md">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-lg font-semibold">{{ $panier->shoe->nom }}</p>
<p>{{ $panier->quantity }} pièces à {{ $panier->shoe->price }} € chacune</p>
</div>

<!-- Formulaire de suppression -->
<form action="{{ route('panier.supprimer', ['id' => $panier->id]) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
</form>
</div>



</li>
@endforeach
</ul>
@else
<p class="text-lg">Aucun élément dans le panier.</p>
@endif

<p class="text-xl mt-4">Total: {{ $total }}</p>
</div>
</x-slot>
</x-app-layout> --}}





<x-app-layout>
  <x-slot name="header">

    <div class="container mx-auto mt-8">
      <h2 class="text-3xl font-semibold mb-4">Mon Panier</h2>
      @if (!empty($paniers))
  <ul class="space-y-4">
    @foreach ($paniers as $panier)
      <li class="border rounded-md shadow-md hover:bg-gray-100">
        <div class="flex items-center p-4 bg-white">  <img class="w-32 h-32 object-cover mr-4" src="/img/{{ $panier->shoe->image_path }}" alt="{{ $panier->shoe->nom }} image">
          <div class="flex-grow">
            <p class="text-lg font-semibold text-gray-900">{{ $panier->shoe->nom }}</p>  <div class="flex text-sm mt-1">
              <p class="mr-4 text-gray-600">Taille: {{ $panier->taille->taille }}</p>  <p class="text-green-500">Prix: {{ $panier->shoe->price }} €</p>  </div>
            <div class="flex mt-4">
              
              <form action="{{ route('panier.supprimer', ['id' => $panier->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </form>

              <p class="mr-4 text-gray-600">{{ $panier->quantity }} pièces</p> 

            </div>
          </div>
        </div>
      </li>
    @endforeach
  </ul>
  



        <!-- Bouton de commande -->
        <p class="text-xl mt-4">Total: {{ $total }}€</p>
        <form action="{{ route('commande.create') }}" method="GET" class="mt-8">
          @csrf
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Passer la commande
          </button>
        </form>

      @else
        <p class="text-lg">Aucun article dans le panier.</p>
      @endif

      
    </div>
  </x-slot>
</x-app-layout>