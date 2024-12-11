<x-app-layout :title="'Contacto'">
    <div class="min-h-screen flex flex-col items-center bg-gradient-to-b from-green-50 to-green-100">
        <div class="text-center py-16 px-6 max-w-4xl">
            <h1 class="text-5xl font-extrabold !text-blue-800 mb-6">
                Contáctanos
            </h1>
            <p class="text-lg text-green-700 mb-2">
                Estamos aquí para ayudarte. No dudes en ponerte en contacto con nosotros.
            </p>
        </div>
        <div class="bg-gray-100 py-12 w-full">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl font-bold text-green-800 mb-6">Seguinos en nuestras redes</h2>
                <div class="flex justify-center space-x-6">
                    <a href="https://facebook.com" target="_blank"
                       class="text-green-600 hover:text-green-800 transition duration-300">
                        <i class="fab fa-facebook-square fa-4x m-4"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank"
                       class="text-green-600 hover:text-green-800 transition duration-300">
                        <i class="fab fa-instagram fa-4x m-4"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full py-16 px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-green-800 mb-12">Información de Contacto</h2>
                <p class="text-green-700 mb-4">📍 Dirección: Avenida Colon 1608 - Monte Grande</p>
                <p class="text-green-700 mb-4">📞 Teléfono: (11) 4281-3358</p>
                <p class="text-green-700 mb-4">📧 Email: info@farmaciacolon.com</p>
                <p class="text-green-700 mb-4">🕒 Horario: Lunes a Sabado, 9:00 AM - 13:00 PM / 16:00 AM - 9:00 PM</p>
                <p class="text-green-700 mb-4">🕒 Horario: Domingos y Feriados, 9:00 AM - 13:00 PM</p>
                <a href="https://maps.google.com"
                   class="inline-block bg-green-600 text-white py-2 px-6 rounded-full font-semibold hover:bg-green-700 transition duration-300">
                    Ver en Google Maps
                </a>
            </div>
        </div>



        <div class="w-full bg-gray-100 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-green-800 mb-6 text-center">Envíanos un Mensaje</h2>
                <form class="bg-white p-6 rounded-lg shadow-md space-y-4">
                    <input type="text" placeholder="Tu nombre" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <input type="email" placeholder="Tu correo" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <textarea placeholder="Escribe tu mensaje aquí..." rows="5" 
                              class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"></textarea>
                    <button type="submit"
                            class="w-full bg-green-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-700 transition duration-300">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>