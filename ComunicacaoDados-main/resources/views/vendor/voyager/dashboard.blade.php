<!DOCTYPE html>
<html>
<head>
    <title>Administração - Faculdade UMFG</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="bg-gray-200 px-4 py-2 flex justify-between items-center">
        <div class="font-bold">Faculdade UMFG | Administração</div>
        <a href="{{ route('voyager.dashboard') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md text-sm">Voltar</a>
    </div>

    <div class="text-center mt-8">
        <h1 class="text-3xl font-bold">Página Administrativa</h1>
    </div>

    <div class="grid grid-cols-3 gap-6 mt-8 mx-4">
        <div class="bg-white border border-gray-300 p-4 text-center">
            <p class="text-lg font-bold">Gerenciar Notícias</p>
            <a href="{{ route('voyager.posts.index') }}" class="text-blue-500 hover:underline">Ver todas as notícias</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 text-center">
            <p class="text-lg font-bold">Gerenciar Categorias</p>
            <a href="{{ route('voyager.categories.index') }}" class="text-blue-500 hover:underline">Ver todas as categorias</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 text-center">
            <p class="text-lg font-bold">Gerenciar Usuários</p>
            <a href="{{ route('voyager.users.index') }}" class="text-blue-500 hover:underline">Ver todos os usuários</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 text-center">
            <p class="text-lg font-bold">Configurações</p>
            <a href="{{ route('voyager.settings.index') }}" class="text-blue-500 hover:underline">Ver todas as configurações</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 text-center">
            <p class="text-lg font-bold">Gerenciar Páginas</p>
            <a href="{{ route('voyager.pages.index') }}" class="text-blue-500 hover:underline">Ver todas as páginas</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 text-center">
            <p class="text-lg font-bold">Gerenciar Galeria</p>
            <a href="{{ route('voyager.media.index') }}" class="text-blue-500 hover:underline">Ver todas as mídias</a>
        </div>
    </div>
</body>
</html>
