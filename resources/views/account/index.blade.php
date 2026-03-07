<x-base>

    <x-slot name="content">
        <div class="account-info">
            <h2>Особистий кабінет</h2>
            <p>Ім'я: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>
        <form method="POST" action="{{ route('account.logout') }}">
            @csrf
            <button type="submit">Вийти</button>
        </form>
    </x-slot>
</x-base>