<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inloggen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form action="/login" method="POST" class="space-y-4">
    @csrf
        <h1 class="text-2xl font-bold text-center text-gray-800">
            Inloggen
        </h1>
    <div>
        <label class="block text-sm font-medium text-gray-700">Gebruikersnaam</label>
        <input type="text" name="username" 
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300" 
            placeholder="Voer hier je gebruikersnaam in">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Wachtwoord</label>
        <input type="password" name="password" 
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300" 
            placeholder="Wachtwoord">
    </div>

    <button type="submit" 
        class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-300 font-semibold">
        Inloggen
    </button>
</form>
</body>
</html>