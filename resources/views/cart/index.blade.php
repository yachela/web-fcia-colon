<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Tu Carrito</h1>

        @if ($cart && $cart->items->count())
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Producto</th>
                        <th class="border border-gray-300 px-4 py-2">Cantidad</th>
                        <th class="border border-gray-300 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart->items as $item)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->product->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->quantity }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <form action="{{ route('cart.remove', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-700">Tu carrito está vacío.</p>
        @endif
    </div>
</x-app-layout>
