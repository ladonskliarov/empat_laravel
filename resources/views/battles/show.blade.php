<x-base>

    <x-slot name="content">
        <div class="battle-details">
            <h2>{{ $battle->title }}</h2>
            <p>{{ $battle->description }}</p>
            <img src="{{ asset($battle->image_map) }}" alt="{{ $battle->name }} map" style="width: auto; height: 200px; margin-top: 20px; object-fit: contain; margin-bottom: 20px;">
            <img src="{{ asset($battle->image_battle) }}" alt="{{ $battle->name }} battle" style="width: auto; height: 200px; object-fit: contain; margin-top: 20px; margin-bottom: 20px;">
            <h1>Бригади</h1>
            <ul>
                @foreach($battle->brigades as $brigade)
                    <a href="{{ route('brigades.show', $brigade->id) }}">
                        <li class="link">{{ $brigade->name }}</li>
                    </a>
                @endforeach
            </ul>
        </div>
    </x-slot>

</x-base>