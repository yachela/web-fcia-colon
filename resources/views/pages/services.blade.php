<x-app-layout :title="'Nuestros Servicios'">
    <div class="min-h-screen flex flex-col items-center">
        <div class="text-center py-16 px-6 max-w-4xl">
            <h1 class="text-5xl font-extrabold text-gray-800 mb-6">
                Nuestros Servicios
            </h1>
            <p class="text-lg text-gray-700 mb-8">
                Conoce todos los servicios que ofrecemos para cuidar tu salud y bienestar.
            </p>
        </div>

        <div class="w-full bg-transparent py-16 px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6 max-w-7xl mx-auto">
                <div class="text-center hover:scale-105 transform transition duration-300">
                    <img src="{{ asset('images/drugstore.jpg') }}" alt="Servicio 1"
                        class="w-[300px] h-[200px] object-cover rounded-xl mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Asesoramiento Farmacéutico</h3>
                    <p class="text-gray-600 mt-2">Consultas personalizadas con nuestros expertos.</p>
                </div>
                <div class="text-center hover:scale-105 transform transition duration-300">
                    <img src="{{ asset('images/tensiometer.jpg') }}" alt="Servicio 2"
                        class="w-[300px] h-[200px] object-cover rounded-xl mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Toma de Presión Arterial</h3>
                    <p class="text-gray-600 mt-2">Monitoreo rápido y seguro.</p>
                </div>
                <div class="text-center hover:scale-105 transform transition duration-300">
                    <img src="{{ asset('images/delivery.jpg') }}" alt="Servicio 3 - Envios"
                        class="w-[300px] h-[200px] object-cover rounded-xl mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Envíos a Domicilio</h3>
                    <p class="text-gray-600 mt-2">Recibe tus productos sin salir de casa.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
