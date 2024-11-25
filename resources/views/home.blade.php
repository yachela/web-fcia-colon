<x-app-layout :title="'Página de Inicio'">
    <div class="min-h-screen flex flex-col items-center">

        <div class="text-center py-16 px-6 max-w-4xl">
            <h1 class="text-5xl font-extrabold text-gray-800 mb-6">
                ¡Bienvenido a <span class="text-green-600">Farmacia Colón!</span>
            </h1>
            <p class="text-lg text-gray-700 mb-8">
                Descubre nuestra amplia gama de productos y servicios diseñados para cuidar de tu salud y bienestar.
            </p>
            <a href="/products"
                class="bg-green-600 text-white py-3 px-8 rounded-full text-lg font-semibold shadow-md hover:bg-green-700 transition duration-300">
                Ver Productos
            </a>
        </div>

     
        <div class="w-full bg-transparent py-16 px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Explora Nuestras Categorías</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-6 max-w-7xl mx-auto">
          
                <div class="hover:scale-105 transform transition duration-300">
                    <img src="https://via.placeholder.com/300x200" alt="Medicamentos"
                        class="rounded-xl">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Medicamentos</h3>
                    <p class="text-gray-600 mt-2">Encuentra medicamentos esenciales al mejor precio.</p>
                </div>
                <div class="hover:scale-105 transform transition duration-300">
                    <img src="https://via.placeholder.com/300x200" alt="Suplementos"
                        class="rounded-xl">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Suplementos</h3>
                    <p class="text-gray-600 mt-2">Reforzamos tu salud con vitaminas y minerales.</p>
                </div>
                <!-- Categoría 3 -->
                <div class="hover:scale-105 transform transition duration-300">
                    <img src="https://via.placeholder.com/300x200" alt="Cuidado Personal"
                        class="rounded-xl">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Cuidado Personal</h3>
                    <p class="text-gray-600 mt-2">Productos para tu cuidado y belleza diaria.</p>
                </div>
                <div class="hover:scale-105 transform transition duration-300">
                    <img src="https://via.placeholder.com/300x200" alt="Ofertas"
                        class="rounded-xl">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Ofertas</h3>
                    <p class="text-gray-600 mt-2">Aprovecha nuestras promociones exclusivas.</p>
                </div>
            </div>
        </div>

        <div class="w-full bg-transparent py-12 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Contáctanos o Visítanos</h2>
            <p class="text-gray-700 mb-4">📍 Dirección: Avenida Colon 1608 - Monte Grande</p>
            <p class="text-gray-700 mb-4">📞 Teléfono: (11) 4281-3358</p>
            <p class="text-gray-700 mb-4">🕒 Horario: Lunes a Viernes, 8:00 AM - 8:00 PM</p>
            <a href="https://maps.google.com"
                class="inline-block bg-green-600 text-white py-2 px-6 rounded-full font-semibold hover:bg-green-700 transition duration-300">
                Ver en Google Maps
            </a>
        </div>
    </div>
</x-app-layout>