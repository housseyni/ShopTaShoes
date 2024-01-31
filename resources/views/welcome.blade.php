<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue Sur Notre Site</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-xl w-full bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Bienvenue ! </h1>
        <p class="text-gray-600 mb-6">Nous sommes ravis de vous accueillir sur notre site ! Connectez-vous ou inscrivez-vous dès maintenant pour profiter de toutes nos fonctionnalités.</p>
        <div class="flex justify-between">
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full mr-2">Se Connecter</a>
            <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full ml-2">S'inscrire</a>
        </div>
    </div>
</body>

</html>