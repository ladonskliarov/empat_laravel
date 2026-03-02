<x-base>

    <x-slot name="content">
        <div class="formations">
            @foreach($formations as $formation)
                <div class="formation">
                    <h2>{{ $formation->name }}</h2>
                    <p>{{ $formation->description }}</p>
                    <img src="{{ $formation->image }}" alt="{{ $formation->name }} image" style="width: 200px; height: auto; margin-top: 20px; margin-bottom: 20px;">
                    <h1>Бригади</h1>
                    <ul>
                        @foreach($formation->brigades as $brigade)
                            <a href="{{ route('brigades.show', $brigade->id) }}">
                                <li class="link">{{ $brigade->name }}</li>
                            </a>
                        @endforeach
                </div>
            @endforeach
        </div>
    </x-slot>

</x-base>