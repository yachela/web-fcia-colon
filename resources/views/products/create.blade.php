<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl text-center font-bold text-gray-800 mb-6">Formulario para crear producto</h1>
        <form action="/products" method="POST" class="bg-white p-6 rounded-lg max-w-2xl mx-auto shadow-md space-y-4">
            @csrf


            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                <span class="text-xs text-red-600">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label for="description" class="block text-gray-700 font-semibold mb-2">Descripción:</label>
                <span class="text-xs text-red-600">
                    @error('description')
                        {{ $message }}
                    @enderror
                </span>
                <textarea id="description" name="description" rows="4" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">{{ old('description') }}</textarea>
            </div>

            <!-- Categoría -->
            <div>
                <label for="category_id" class="block text-gray-700 font-semibold mb-2">Categoría:</label>
                <span class="text-xs text-red-600">
                    @error('category_id')
                        {{ $message }}
                    @enderror
                </span>
                <select id="category_id" name="category_id" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="">Seleccione una categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div>
                <label for="price" class="block text-gray-700 font-semibold mb-2">Precio:</label>
                <span class="text-xs text-red-600">
                    @error('price')
                        {{ $message }}
                    @enderror
                </span>
                <input type="number" id="price" name="price" step="0.01" min="0"
                    value="{{ old('price') }}" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>


            <div>
                <label for="stock" class="block text-gray-700 font-semibold mb-2">Stock:</label>
                <span class="text-xs text-red-600">
                    @error('stock')
                        {{ $message }}
                    @enderror
                </span>
                <input type="number" id="stock" name="stock" min="0" value="{{ old('stock') }}" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>


            <div>
                <label for="image" class="block text-gray-700 font-semibold mb-2">Subir Imagen:</label>
                <input type="file" id="image" name="image"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    accept="image/*">
            </div>

            <!-- ¿Requiere receta? -->
            <div>
                <label for="is_prescription" class="block text-gray-700 font-semibold mb-2">¿Requiere receta?</label>
                <select id="is_prescription" name="is_prescription" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="0" {{ old('is_prescription') == '0' ? 'selected' : '' }}>No</option>
                    <option value="1" {{ old('is_prescription') == '1' ? 'selected' : '' }}>Sí</option>
                </select>
            </div>


            <div>
                <label for="expiration_date" class="block text-gray-700 font-semibold mb-2">Fecha de Expiración:</label>
                <input type="date" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>


            <div>
                <label for="manufacturer" class="block text-gray-700 font-semibold mb-2">Fabricante:</label>
                <input type="text" id="manufacturer" name="manufacturer" value="{{ old('manufacturer') }}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>


            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Crear Producto
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
