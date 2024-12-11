<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de control FC') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-900 mb-6">
                    {{ __('¡Bienvenido!') }}
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    <a href="{{ route('products.index') }}"
                        class="bg-green-100 p-6 rounded-lg shadow-md hover:bg-green-200 transition duration-300">
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-4xl text-green-500 mb-4">
                                list
                            </span>
                            <h3 class="text-lg font-semibold text-gray-800">Ver Productos</h3>
                            <p class="text-sm text-gray-600">Consulta todos los productos disponibles</p>
                        </div>
                    </a>

                    <a href="{{ route('products.create') }}"
                        class="bg-blue-100 p-6 rounded-lg shadow-md hover:bg-blue-200 transition duration-300">
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-4xl text-blue-500 mb-4">
                                add
                            </span>
                            <h3 class="text-lg font-semibold text-gray-800">Crear Producto</h3>
                            <p class="text-sm text-gray-600">Agrega nuevos productos al catálogo</p>
                        </div>
                    </a>


                    <a href="{{ route('products.index') }}"
                        class="bg-red-100 p-6 rounded-lg shadow-md hover:bg-red-200 transition duration-300">
                        <div class="flex flex-col items-center">
                            <span class="material-symbols-outlined text-4xl text-red-500 mb-4">
                                delete
                            </span>
                            <h3 class="text-lg font-semibold text-gray-800">Eliminar Productos</h3>
                            <p class="text-sm text-gray-600">Quita productos del inventario</p>
                        </div>
                    </a>

                    @role('Admin')
                        <a href="{{ route('users.index') }}"
                            class="bg-sky-100 p-6 rounded-lg shadow-md hover:bg-sky-200 transition duration-300">
                            <div class="flex flex-col items-center">
                                <span class="material-symbols-outlined text-4xl text-purple-500 mb-4">
                                    group
                                </span>
                                <h3 class="text-lg font-semibold text-gray-800">Gestionar Usuarios</h3>
                                <p class="text-sm text-gray-600">Accede a la gestión de usuarios</p>
                            </div>
                        </a>
                    @else
                        <div
                            class="relative group bg-gray-100 p-6 rounded-lg shadow-md hover:bg-purple-200 transition duration-300">
                            <div class="flex flex-col items-center">
                                <span class="material-symbols-outlined text-4xl text-purple-200 mb-4">
                                    group
                                </span>
                                <h3 class="text-lg font-semibold text-gray-800">Gestionar Usuarios</h3>
                                <p class="text-sm text-gray-600">Accede a la gestión de usuarios</p>
                            </div>

                            <div
                                class="absolute bottom-16 left-1/2 transform -translate-x-1/2 w-max px-4 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                No tienes permisos suficientes
                            </div>
                        </div>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
