<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Formulario para crear producto</h1>
        <form action="/products" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>
       
            <div>
                <label for="description" class="block text-gray-700 font-semibold mb-2">Descripción:</label>
                <textarea id="description" name="description" rows="4" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"></textarea>
            </div>


            <div>
                <label for="category" class="block text-gray-700 font-semibold mb-2">Categoría:</label>
                <input type="text" id="category" name="category" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <!-- Precio -->
            <div>
                <label for="price" class="block text-gray-700 font-semibold mb-2">Precio:</label>
                <input type="number" id="price" name="price" step="0.01" min="0" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

  
            <div>
                <label for="stock" class="block text-gray-700 font-semibold mb-2">Stock:</label>
                <input type="number" id="stock" name="stock" min="0" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label for="image" class="block text-gray-700 font-semibold mb-2">Subir Imagen:</label>
                <input type="file" id="image" name="image"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    accept="image/*">
            </div>

    
            <div>
                <label for="is_prescription" class="block text-gray-700 font-semibold mb-2">¿Requiere receta?</label>
                <select id="is_prescription" name="is_prescription" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="0">No</option>
                    <option value="1">Sí</option>
                </select>
            </div>

    
            <div>
                <label for="expiration_date" class="block text-gray-700 font-semibold mb-2">Fecha de Expiración:</label>
                <input type="date" id="expiration_date" name="expiration_date"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <!-- Fabricante -->
            <div>
                <label for="manufacturer" class="block text-gray-700 font-semibold mb-2">Fabricante:</label>
                <input type="text" id="manufacturer" name="manufacturer"
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
    




