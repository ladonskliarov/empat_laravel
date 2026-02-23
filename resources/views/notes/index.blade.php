<x-base>

    <x-slot name="title">До роботи</x-slot>

    <x-slot name="content">
        <div class="notes">
            <h1>Нотатки:</h1>
            <form class="form-card" action="{{route('notes.store')}}" method="POST">
                @csrf
                <textarea class="form-card__title textarea" name="title" placeholder="Заголовок" required></textarea>
                <textarea class="form-card__content textarea" name="content" placeholder="Зміст" required></textarea>
                <button class="form-card__button" type="submit">
                    Створити
                </button>
            </form>
            @foreach ($notes as $note)
            <a href="{{route('notes.edit', $note->id)}}">
                <div class="note-card" style="max-width: 200px; height: 100px">
                    <div class="note-card__content">
                        <h3>{{$note->title}}</h3>
                        <p>{{$note->content}}</p>
                    </div>
                    <div class="note-card__bottom">
                        <p>{{$note->created_at}}</p>
                        <form action="{{route('notes.destroy', $note->id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <img src="icons/remove_icon.svg" height="30px" width="30px"></img>
                            </button>
                        </form>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </x-slot>

</x-base>