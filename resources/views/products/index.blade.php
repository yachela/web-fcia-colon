<x-app-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center text-gray-800 my-8">Todos los productos</h1>

        @auth
            <a href="{{ route('products.create') }}" 
               class="inline-block bg-green-600 text-white font-semibold text-sm py-2 px-4 rounded-lg shadow-md hover:bg-green-700 hover:shadow-lg transition duration-300 mb-4">
                Agregar producto    
            </a>
        @endauth

  
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-white shadow-lg rounded-lg p-4 hover:shadow-2xl transition-shadow duration-300">
                    <a href="/products/{{ $product->id }}">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-[300px] h-[200px] object-cover rounded-xl">
                        <h2 class="text-lg font-semibold text-gray-700 hover:text-gray-900 transition-colors duration-200">{{ $product->name }}</h2>
                        <p class="text-sm text-gray-500">{{ Str::limit($product->description, 50) }}</p>
                        <div class="text-gray-800 font-bold mt-2">${{ number_format($product->price, 2) }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>