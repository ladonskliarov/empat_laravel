<x-base>

    <x-slot name="content">
        <div class="brigade-details">
            <h2>{{ $brigade->name }}</h2>
            <a href="{{ route('formations.index')}}"><p>У складі: <strong class="link">{{ $brigade->formation->name }}</strong></p></a>
            <p>{{ $brigade->description }}</p>
            <img src="{{ asset($brigade->image) }}" alt="{{ $brigade->name }} image" style="width: auto; height: 300px; object-fit: contain; margin-top: 20px; margin-bottom: 20px;">
            <h3>Битви</h3>
            <ul>
                @foreach($brigade->battles as $battle)
                    <a href="{{ route('battles.show', $battle->id) }}">
                        <li class="link">{{ $battle->title }}</li>
                    </a>
                @endforeach
            </ul>
        </div>
    </x-slot>

</x-base>