<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registreren</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form action="/register" method="POST" class="space-y-4">
    @csrf

    <h1 class="text-2xl font-bold text-center text-gray-800">
            Registreren
    </h1>

    <div>
        <label class="block text-sm font-medium text-gray-700">Naam</label>
        <input type="text" name="name" 
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300" 
            placeholder="Je volledige naam">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Gebruikersnaam</label>
        <input type="text" name="username" 
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300" 
            placeholder="Kies een unieke username">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Wachtwoord</label>
        <input type="password" name="password" 
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300" 
            placeholder="Wachtwoord">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Rol</label>
        <select name="role" 
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300">
            <option value="Gebruiker">Gebruiker</option>
            <option value="Beheerder">Beheerder</option>
        </select>
    </div>

    <button type="submit" 
        class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-300 font-semibold">
        Account Aanmaken
    </button>
</form>
</body>
</html>