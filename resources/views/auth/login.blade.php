<x-app-layout :title="'Iniciar Sesión'">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Iniciar Sesión</h1>
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-600">Correo electrónico</label>
                    <input type="email" id="email" name="email" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300">
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-600">Contraseña</label>
                    <input type="password" id="password" name="password" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-green-300">
                </div>
                <div class="text-right">
                    <a href="#" class="text-sm text-green-600 hover:underline">Olvide mi contraseña</a>
                </div>
                <button type="submit"
                    class="w-full bg-green-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-700 transition duration-300">
                    Iniciar Sesión
                </button>
            </form>
            <p class="text-sm text-center text-gray-600 mt-4">
                ¿No tienes cuenta? <a href="/register" class="text-green-600 hover:underline">Registrate aca</a>
            </p>
        </div>
    </div>
</x-app-layout>