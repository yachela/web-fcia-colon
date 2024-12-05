<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-900 mb-6">
                    {{ __("¡Ya estás logueado!") }}
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                  
                    <a href="{{ route('products.index') }}" class="bg-green-100 p-6 rounded-lg shadow-md hover:bg-green-200 transition duration-300">
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-gray-600 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800">Ver Productos</h3>
                            <p class="text-sm text-gray-600">Consulta todos los productos disponibles</p>
                        </div>
                    </a>

                    
                    <a href="{{ route('products.create') }}" class="bg-blue-100 p-6 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800">Crear Producto</h3>
                            <p class="text-sm text-gray-600">Agrega nuevos productos al catálogo</p>
                        </div>
                    </a>

                   
                    <a href="{{ route('products.index') }}" class="bg-yellow-100 p-6 rounded-lg shadow-md hover:bg-yellow-200 transition duration-300">
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-yellow-600 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800">Editar Productos</h3>
                            <p class="text-sm text-gray-600">Modifica la información de los productos</p>
                        </div>
                    </a>

                 
                    <a href="{{ route('products.index') }}" class="bg-red-100 p-6 rounded-lg shadow-md hover:bg-red-200 transition duration-300">
                        <div class="text-center">
                            <svg class="w-12 h-12 mx-auto text-red-600 mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                            <h3 class="text-lg font-semibold text-gray-800">Eliminar Productos</h3>
                            <p class="text-sm text-gray-600">Quita productos del inventario</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>