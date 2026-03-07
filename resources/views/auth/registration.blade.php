<x-base>

    <x-slot name="content">
        <div class="registration-form">
            <h2 style="margin-bottom: 20px;">Реєстрація</h2>
            <form method="POST" action="{{ route('auth.registration') }}">
                @csrf
                <input type="text" name="name" placeholder="Ім'я" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit">Зареєструватися</button>
            </form>
        </div>
    </x-slot>

</x-base>