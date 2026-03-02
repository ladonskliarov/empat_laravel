<x-base>

    <x-slot name="content">
        <div class="battles">
            @foreach($battles as $battle)
                <div class="battle">
                    <a href="{{ route('battles.show', $battle->id) }}"><h2>{{ $battle->title }}</h2></a>
                </div>
            @endforeach
        </div>
    </x-slot>

</x-base>