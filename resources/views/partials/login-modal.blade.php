    <div
    x-data="{ open: false }"
    x-on:open-login-modal.window="open = true"
    x-on:keydown.escape.window="open = false"
    x-cloak
    >
    <!-- Overlay -->
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 z-50 bg-black/40"
        @click="open = false"
        aria-hidden="true"
    ></div>

    <!-- Modal -->
    <div
        x-show="open"
        x-transition
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        role="dialog"
        aria-modal="true"
        aria-labelledby="loginModalTitle"
    >
        <div
        class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl"
        @click.stop
        >
        <h2 id="loginModalTitle" class="text-lg font-semibold text-gray-900">
            Iniciar sesión
        </h2>

        <form method="POST" action="{{ route('login.post') }}" class="mt-5 space-y-4">
            @csrf

            <div>
            <label class="block text-sm text-gray-600 mb-1">Usuario</label>
            <input
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="w-full rounded-lg border border-gray-200 px-4 py-3 text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400"
                placeholder="tuemail@ejemplo.com"
            />
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
            </div>

            <div>
            <label class="block text-sm text-gray-600 mb-1">Contraseña</label>
            <input
                name="password"
                type="password"
                required
                class="w-full rounded-lg border border-gray-200 px-4 py-3 text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400"
                placeholder="********"
            />
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
            </div>

            <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm text-gray-600">
                <input
                type="checkbox"
                name="remember"
                class="rounded border-gray-300 text-orange-500 focus:ring-orange-400"
                />
                Recordarme
            </label>

            @if (Route::has('password.request'))
                <a
                href="{{ route('password.request') }}"
                class="text-sm text-gray-600 hover:text-gray-900 underline"
                >
                ¿Olvidaste la contraseña?
                </a>
            @endif
            </div>

            <button
            type="submit"
            class="w-full rounded-full bg-orange-500 px-6 py-3 font-semibold text-white hover:bg-orange-600 transition"
            >
            Iniciar sesión
            </button>

            <button
            type="button"
            class="w-full text-sm text-gray-500 hover:text-gray-700"
            @click="open = false"
            >
            Cancelar
            </button>
        </form>
        </div>
    </div>
    </div>
