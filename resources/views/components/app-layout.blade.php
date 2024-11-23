<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <title>{{ $title ?? 'Farmacia Colon MG' }}</title>
<style>
  
.gradient-bg {
    background: linear-gradient(
        90deg,
        rgba(255, 255, 255, 1) 0%,
        rgba(240, 249, 244, 1) 25%,
        rgba(220, 242, 238, 1) 50%,
        rgba(240, 249, 255, 1) 75%,
        rgba(255, 255, 255, 1) 100%
    );
}
</style>
</head>
<body class="font-sans antialiased gradient-bg">

    <header>
        <nav class="w-full z-20 top-0 left-0 border-b border-gray-200">
            <div class="max-w-screen-xl mx-auto flex items-center justify-between px-4 py-2">
               
                <a href="../" class="flex items-center">
                    <span class="ml-3 text-xl font-bold text-gray-800">Farmacia Colon</span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="../" class="text-gray-700 hover:text-green-600">Home</a>
                    <a href="#" class="text-gray-700 hover:text-green-600">Nosotros</a>
                    <a href="#" class="text-gray-700 hover:text-green-600">Servicios</a>
                    <a href="#" class="text-gray-700 hover:text-green-600">Contacto</a>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" 
                    class="bg-green-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-green-700 transition duration-300">
                    Iniciar sesión
                 </a>
                    <button class="inline-flex items-center p-2 text-gray-500 hover:text-gray-700 focus:outline-none md:hidden">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-10">
        <div class="max-w-screen-xl mx-auto p-4">
        
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-gray-50 py-4">
        <div class="max-w-screen-xl mx-auto text-center text-gray-600">
             2024 Farmacia Colon. 
        </div>
    </footer>

</body>
</html>