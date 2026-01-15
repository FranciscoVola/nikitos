<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>Login - Nikitos</title>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
  <div class="w-full max-w-md bg-white rounded-xl shadow p-6">
    <h1 class="text-2xl font-bold">Login Admin</h1>
    <p class="text-sm text-gray-500 mt-1">Ingresá con el usuario admin seedado.</p>

    @if ($errors->any())
      <div class="mt-4 rounded bg-red-50 p-3 text-sm text-red-700">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}" class="mt-6 space-y-4">
      @csrf

      <div>
        <label class="block text-sm font-medium">Email</label>
        <input name="email" type="email" value="{{ old('email') }}"
               class="mt-1 w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900" required>
      </div>

      <div>
        <label class="block text-sm font-medium">Password</label>
        <input name="password" type="password"
               class="mt-1 w-full rounded border-gray-300 focus:border-gray-900 focus:ring-gray-900" required>
      </div>

      <div class="flex items-center justify-between">
        <label class="inline-flex items-center gap-2 text-sm text-gray-600">
          <input type="checkbox" name="remember" class="rounded border-gray-300">
          Recordarme
        </label>
      </div>

      <button class="w-full py-2 rounded bg-gray-900 text-white hover:bg-gray-800">
        Ingresar
      </button>

      <div class="text-xs text-gray-500">
        Demo: admin@nikitos.test / Admin1234!
      </div>
    </form>
  </div>
</body>
</html>
