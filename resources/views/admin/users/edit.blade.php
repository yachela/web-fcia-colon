<x-app-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center text-gray-800 my-8">Editar Usuario</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nombre
                </label>
                <input type="text" name="name" id="name" value="{{ $user->name }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input type="email" name="email" id="email" value="{{ $user->email }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                    Rol
                </label>
                <select name="role" id="role"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}"
                            {{ $user->roles->pluck('name')->contains($role->name) ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class=" text-green font-bold m-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
