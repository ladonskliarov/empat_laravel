<x-base>

    <x-slot name="content">
        <div class="formations">
            <h2>Категорії</h2>
            <ul class="categories">
                <li><a href="{{ route('products.index') }}">Усі товари</a></li>
                @foreach($categories as $category)
                    <li><a href="{{ route('products.index', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
            @foreach($products as $product)
                <div class="formation">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }} image" style="width: 200px; height: auto; margin-top: 20px; margin-bottom: 20px;">
                    <h1>Ціна: {{ $product->price }} грн</h1>
                </div>
            @endforeach
        </div>
    </x-slot>

</x-base>