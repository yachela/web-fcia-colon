<div class="w-full bg-white shadow-lg border-b border-gray-200">
    <div class="max-w-screen-xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">
            Farmacia Colon
        </a>

        <button id="mobile-menu-button" class="sm:hidden flex items-center text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div class="hidden sm:flex sm:items-center space-x-8">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-600 text-base font-medium transition duration-300">
                Home
            </a>
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-green-600 text-base font-medium transition duration-300">
                Nosotros
            </a>
            <a href="{{ route('services') }}" class="text-gray-700 hover:text-green-600 text-base font-medium transition duration-300">
                Servicios
            </a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-green-600 text-base font-medium transition duration-300">
                Contacto
            </a>
            @if(session('error'))
            <div id="alert-message" class="flex items-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg animate-slide-down mt-4" role="alert">
                <button 
                    onclick="document.getElementById('alert-message').remove()" 
                    class="mr-6 text-gray-600 hover:text-gray-800 font-bold">
                    &times;
                </button>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
        
        <form action="{{ route('products.search') }}" method="GET" class="flex items-center">
            <div class="relative flex items-center border border-gray-300 rounded-full bg-white shadow focus-within:border-green-500 focus-within:ring-1 focus-within:ring-green-300" style="width: 300px;">
              
                <span class="absolute left-3 flex items-center justify-center text-green-600 font-bold">
                    <span class="material-symbols-outlined material-icons">
                        search
                        </span>
                </span>
                
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Buscar productos..." 
                    value="{{ request('search') }}" 
                    class="w-full pl-10 pr-4 py-2 text-gray-700 bg-transparent rounded-full focus:outline-none"
                >
            </div>
        </form>
            @auth
            <div class="relative">
                <button id="admin-menu-button" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-300 transition duration-300">
                    {{ Auth::user()->name }}
                </button>
                <div id="admin-menu" class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-lg hidden">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                        Perfil
                    </a>
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                        Panel de control
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Cerrar sesión
                        </button>
                    </form>
                </div>
            </div>
        @endauth
            @guest
                <a href="{{ route('login') }}" 
                   class="bg-green-600 text-white px-5 py-2 rounded-lg text-base font-medium hover:bg-green-700 transition duration-300">
                   Iniciar sesión
                </a>
            @endguest
        </div>
    </div>

    <div id="mobile-menu" class="hidden px-6 py-4 space-y-2 bg-white border-t border-gray-200 sm:hidden">
        <a href="{{ route('home') }}" class="block text-gray-700 hover:text-green-600 text-lg font-medium transition duration-300">
            Home
        </a>
        <a href="#" class="block text-gray-700 hover:text-green-600 text-lg font-medium transition duration-300">
            Nosotros
        </a>
        <a href="#" class="block text-gray-700 hover:text-green-600 text-lg font-medium transition duration-300">
            Servicios
        </a>
        <a href="#" class="block text-gray-700 hover:text-green-600 text-lg font-medium transition duration-300">
            Contacto
        </a>
        @auth
            <a href="{{ route('profile.edit') }}" class="block text-gray-700 hover:text-green-600 text-lg font-medium transition duration-300">
                Perfil
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block w-full text-left text-gray-700 hover:text-green-600 text-lg font-medium transition duration-300">
                    Cerrar sesión
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" 
               class="block bg-green-600 text-white px-5 py-2 rounded-lg text-lg font-medium hover:bg-green-700 transition duration-300">
               Iniciar sesión
            </a>
        @endauth
    </div>
</div>

<script>
    document.getElementById('admin-menu-button').addEventListener('click', function () {
        const adminMenu = document.getElementById('admin-menu');
        adminMenu.classList.toggle('hidden');
    });


    document.addEventListener('DOMContentLoaded', () => {
    const alert = document.getElementById('alert-message');
    if (alert) {
        setTimeout(() => {
            alert.remove();
        }, 5000); 
    }
});
   

</script>