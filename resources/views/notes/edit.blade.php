<x-base>

    <x-slot name="content">
        <div class="notes">
            <form class="form-card" action="{{route('notes.update', $note->id)}}" method="POST">
                @csrf
                @method('PUT')
                <textarea class="form-card__title textarea" name="title" required>{{$note->title}}</textarea>
                <textarea class="form-card__content textarea" name="content" required>{{$note->content}}</textarea>
                <button class="form-card__button" type="submit">
                    Змінити
                </button>
            </form>
        </div>
    </x-slot>

</x-base>