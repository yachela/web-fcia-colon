<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl text-center font-bold text-gray-800 mb-6 text-center">Editar Producto</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                <span class="text-xs text-red-600">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required
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
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">{{ old('description', $product->description) }}</textarea>
            </div>

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
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
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
                    value="{{ old('price', $product->price) }}" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>


            <div>
                <label for="stock" class="block text-gray-700 font-semibold mb-2">Stock:</label>
                <span class="text-xs text-red-600">
                    @error('stock')
                        {{ $message }}
                    @enderror
                </span>
                <input type="number" id="stock" name="stock" min="0"
                    value="{{ old('stock', $product->stock) }}" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label for="image_url" class="block text-sm font-medium text-gray-900">Imagen del Producto:</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                        @if ($product->image_url)
                            <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"
                                class="mx-auto h-48 w-48 object-cover rounded-lg">
                        @else
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        @endif
                        <div class="mt-4 flex text-sm text-gray-600 justify-center">
                            <label for="image_url"
                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Subir archivo, </span>
                                <input id="image_url" name="image_url" type="file" class="sr-only" accept="image/*">
                            </label>
                            <p class="pl-1"> o arrastra y suelta</p>
                        </div>
                        <p class="text-xs text-gray-600">PNG, JPG, GIF hasta 10MB</p>
                    </div>
                </div>
            </div>


            <div>
                <label for="is_prescription" class="block text-gray-700 font-semibold mb-2">¿Requiere receta?</label>
                <select id="is_prescription" name="is_prescription" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="0"
                        {{ old('is_prescription', $product->is_prescription) == 0 ? 'selected' : '' }}>No</option>
                    <option value="1"
                        {{ old('is_prescription', $product->is_prescription) == 1 ? 'selected' : '' }}>Sí</option>
                </select>
            </div>

            <div>
                <label for="expiration_date" class="block text-gray-700 font-semibold mb-2">Fecha de Expiración:</label>
                <span class="text-xs text-red-600">
                    @error('expiration_date')
                        {{ $message }}
                    @enderror
                </span>
                <input type="date" id="expiration_date" name="expiration_date"
                    value="{{ old('expiration_date', $product->expiration_date) }}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>


            <div>
                <label for="manufacturer" class="block text-gray-700 font-semibold mb-2">Fabricante:</label>
                <span class="text-xs text-red-600">
                    @error('manufacturer')
                        {{ $message }}
                    @enderror
                </span>
                <input type="text" id="manufacturer" name="manufacturer"
                    value="{{ old('manufacturer', $product->manufacturer) }}" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>


            <div class="mt-6">
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Actualizar Producto
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
