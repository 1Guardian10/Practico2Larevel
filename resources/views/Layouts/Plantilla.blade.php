<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Mi sitio web')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto p-4">
            <h1 class="text-xl font-bold">@yield('header','Emcabezado del sitio')</h1>
        </div>
    </header>

    <main class="flex-grow container mx-auto p-4"> @yield('content')</main>

    <footer class="bg-gray-200 text-center p-4">
        <p>&copy; {{date('Y')}} Mi sitio web. Todos los derechos reservados</p>
    </footer>
    @stack('scripts')
</body>
</html>