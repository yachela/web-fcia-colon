<x-app-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center text-gray-800 my-8">Gestión de Usuarios</h1>

        @auth
            <a href="{{ route('users.create') }}" 
               class="inline-block bg-green-600 text-white font-semibold text-sm py-2 px-4 rounded-lg shadow-md hover:bg-green-700 hover:shadow-lg transition duration-300 mb-4">
                Agregar Usuario
            </a>
        @endauth

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-left">Correo Electrónico</th>
                        <th class="py-3 px-6 text-left">Roles</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    @foreach ($users as $user)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                {{ $user->name }}
                            </td>
                            <td class="py-3 px-6 text-left">
                                {{ $user->email }}
                            </td>
                            <td class="py-3 px-6 text-left">
                                {{ $user->roles->pluck('name')->join(', ') }}
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex justify-center items-center">
                                    <a href="{{ route('users.edit', $user->id) }}" 
                                       class="text-blue-600 hover:underline">Editar</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="ml-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 hover:underline">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>