<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-[400px] bg-white shadow-lg rounded-lg p-6">
            <a href="/products" 
               class="text-green-600 hover:underline text-sm font-semibold mb-4 inline-block">
                ⇤ Volver a menú principal
            </a>
            
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>
            
            <img src="{{ asset($product->image_url) }}" 
                 alt="{{ $product->name }}" 
                 class="w-[300px] h-auto object-cover rounded-lg mx-auto mb-4">
            
            <p class="text-gray-600 mb-4">{{ $product->description }}</p>
            
            <p class="text-lg text-gray-800 font-semibold">
                Precio: <span class="text-green-600">${{ number_format($product->price, 2) }}</span>
            </p>

            @role('Admin|Employee')
                <div class="mt-4">
                    <a href="/products/{{ $product->id }}/edit" 
                       class="p-4 py-2 text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg shadow-lg block text-center">
                        Editar producto
                    </a>
                </div>

                <form action="/products/{{ $product->id }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')

                    <button type="submit" 
                            onclick="return confirm('¿Estás seguro de querer eliminar?')" 
                            class="p-4 py-2 text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg shadow-lg block w-full text-center">
                        Eliminar producto
                    </button>
                </form>
            @endrole
        </div>
    </div>
</x-app-layout>