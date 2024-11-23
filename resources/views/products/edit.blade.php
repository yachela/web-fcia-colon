<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Formulario para crear producto</h1>
        <form action="/products/{{$product->id}}" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-4">
            @csrf

            @method('PUT')

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" value="{{$product->name}}">
            </div>
       
            <div>
                <label for="description" class="block text-gray-700 font-semibold mb-2">Descripción:</label>
                <textarea id="description" name="description" value="{{$product->description}}" rows="4" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" ></textarea>
            </div>


            <div>
                <label for="category" class="block text-gray-700 font-semibold mb-2">Categoría:</label>
                <input type="text" id="category" name="category" value="{{$product->category}}" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label for="price" class="block text-gray-700 font-semibold mb-2">Precio:</label>
                <input type="number" id="price" name="price" value="price"  step="0.01" min="0" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

  
            <div>
                <label for="stock" class="block text-gray-700 font-semibold mb-2">Stock:</label>
                <input type="number" id="stock" name="stock" value="{{$product->stock}}"  min="0" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label for="image_url" class="block text-gray-700 font-semibold mb-2">URL de la Imagen:</label>
                <input type="url" id="image_url" name="image_url"  value="{{$product->image_url}}" 
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

    
            <div>
                <label for="is_prescription" class="block text-gray-700 font-semibold mb-2">¿Requiere receta?</label>
                <select id="is_prescription" name="is_prescription"  value="{{$product->is_prescription}}"  required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                    <option value="0">No</option>
                    <option value="1">Sí</option>
                </select>
            </div>

    
            <div>
                <label for="expiration_date" class="block text-gray-700 font-semibold mb-2">Fecha de Expiración:</label>
                <input type="date" id="expiration_date" name="expiration_date" value="{{$product->expiration_date}}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

          
            <div>
                <label for="manufacturer" class="block text-gray-700 font-semibold mb-2">Fabricante:</label>
                <input type="text" id="manufacturer" name="manufacturer" value="{{$product->manufacturer}}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                   Actualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
    




