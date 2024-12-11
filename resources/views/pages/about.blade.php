<x-app-layout :title="'Sobre Nosotros'">
    <div class="min-h-screen flex flex-col items-center bg-gradient-to-b from-green-50 to-green-100">
        <div class="text-center py-16 px-6 max-w-4xl">
            <h1 class="text-5xl font-extrabold text-green-800 mb-6">
                Sobre Nosotros
            </h1>
            <p class="text-lg text-green-700 mb-2">
                Más de 25 años dedicados a cuidar tu salud con compromiso y profesionalismo.
            </p>
        </div>

        <div class="w-full flex justify-center my-2">
            <img src="{{ asset('images/farmacia-colon.jpg') }}" alt="Farmacia Colón" class="max-w-full h-auto rounded-lg shadow-lg">
        </div>

        <div class="w-full py-16 px-6">
            <div class="max-w-6xl mx-auto text-center">
                <p class="text-lg text-green-700 leading-relaxed">
                    En Farmacia Colón, creemos que la salud es lo más importante. Desde 1995, somos un negocio familiar fundado por dos farmacéuticos con amplia trayectoria y dedicación. Nuestro objetivo siempre ha sido ofrecer productos de calidad, servicios confiables y una atención personalizada para garantizar el bienestar de nuestra comunidad.
                </p>
                <p class="text-lg text-green-700 leading-relaxed mt-6">
                    Lo que nos hace únicos es nuestro enfoque cercano: la farmacia siempre ha sido atendida directamente por sus dueños, quienes conocen a cada cliente y sus necesidades. Esto nos ha permitido construir relaciones de confianza y mantenernos como un referente en el cuidado de la salud en nuestra región.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                    <div class="bg-green-200 rounded-lg p-6 text-center shadow-md">
                        <h3 class="text-2xl font-semibold text-green-800 mb-2">25+</h3>
                        <p class="text-green-600">Años de Experiencia</p>
                    </div>
                    <div class="bg-green-200 rounded-lg p-6 text-center shadow-md">
                        <h3 class="text-2xl font-semibold text-green-800 mb-2">10k+</h3>
                        <p class="text-green-600">Clientes Satisfechos</p>
                    </div>
                    <div class="bg-green-200 rounded-lg p-6 text-center shadow-md">
                        <h3 class="text-2xl font-semibold text-green-800 mb-2">300+</h3>
                        <p class="text-green-600">Productos Disponibles</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white py-16 px-6 mt-12 w-full shadow-inner">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-green-800 mb-4">Nuestra Filosofía</h2>
                <p class="text-lg text-green-700 leading-relaxed">
                    Creemos que la base de un servicio de calidad está en el trato humano. Es por eso que nuestra misión siempre ha sido tratar a cada cliente como parte de nuestra familia. Estamos comprometidos en escuchar, guiar y acompañar a las personas en cada etapa de su vida, asegurándonos de que encuentren lo que necesitan para cuidar su salud.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>