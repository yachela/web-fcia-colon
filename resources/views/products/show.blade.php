<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <a href="/products" class="text-green-600 hover:underline text-sm font-semibold mb-4 inline-block">
        ⇤ Volver a menú principal
        </a>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{$product->name}}</h1>
            <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-3/4 h-auto    object-cover rounded-lg">
                        <p class="text-gray-600 mb-4">{{$product->description}}</p>
            <p class="text-lg text-gray-800 font-semibold">
                Precio: <span class="text-green-600">${{ number_format($product->price, 2) }}</span>
            </p>
            <div class="mt-4">
                <a class="p-4 py-2 text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg shadow-lg" href="/products/{{$product->id}}/edit">
                    Editar producto</a>
            </div>

            <form action="/products/{{$product->id}}" method="POST">
                @csrf
                @method('DELETE')

                <div class="mt-4">
                    <button class="p-4 py-2 text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg shadow-lg"
                    onclick="return confirm('Estas seguro de querer eliminar?')""
                    type="submit">
                        Eliminar producto
                    </button>
                </div>
            </form>
          
        </div>

    </div>
</x-app-layout>