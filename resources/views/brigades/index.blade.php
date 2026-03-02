<x-base>

    <x-slot name="content">
        <div class="brigades">
            @foreach($brigades as $brigade)
                <div class="brigade">
                    <a href="{{ route('brigades.show', $brigade->id) }}"><h2>{{ $brigade->name }}</h2></a>
                    <a href="{{ route('formations.index')}}"><p>У складі: <strong class="link">{{ $brigade->formation->name }}</strong></p></a>
                    <a href="{{ route('brigades.show', $brigade->id) }}"><img src="{{ $brigade->image }}" alt="{{ $brigade->name }} image" style="width: auto; height: 300px; margin-top: 20px; margin-bottom: 20px;"></a>
                    <h3>Битви</h3>
                    <ul>
                        @foreach($brigade->battles as $battle)
                            <a href="{{ route('battles.show', $battle->id) }}">
                                <li class="link">{{ $battle->title }}</li>
                            </a>
                        @endforeach
                    </ul>

                </div>
            @endforeach
        </div>
    </x-slot>

</x-base>