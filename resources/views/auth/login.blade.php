<x-base>

    <x-slot name="content">
        <div class="login-form">
            <h2 style="margin-bottom: 20px;">Увійти</h2>
            <form method="POST" action="{{ route('auth.login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit">Увійти</button>
            </form>

        </div>
    </x-slot>

</x-base>