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
        <li class="border bg-gray-200 p-4 rounded-md shadow-md">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-lg font-semibold">{{ $panier->shoe->nom }}</p>
              <p>{{ $panier->quantity }} pieces à {{ $panier->shoe->price }} €</p>
            </div>

            <form action="{{ route('panier.supprimer', ['id' => $panier->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:underline">
                Supprimer
              </button>
            </form>
          </div>
        </li>
        @endforeach
      </ul>

      <!-- Bouton de commande -->
      <form action="{{ route('commande.create') }}" method="GET" class="mt-8">
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Passer la commande
        </button>
      </form>

      @else
      <p class="text-lg">Aucun article dans le panier.</p>
      @endif

      <p class="text-xl mt-4">Total: {{ $total }}</p>
    </div>
  </x-slot>
</x-app-layout>