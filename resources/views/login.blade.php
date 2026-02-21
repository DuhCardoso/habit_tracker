<x-layout>
  <main class="container m-auto">
    <section class="max-w-150 habit-shadow-lg mx-auto space-y-6 border-2 bg-white px-4 py-6 md:px-10">
      <div class="flex flex-col gap-2">
        <h1 class="text-3xl font-black">Login</h1>
        <p class="mb-6 text-gray-800/75">Entre com seus dados para acessar sua conta.</p>
      </div>

      <form
        action="{{ route('auth.login') }}"
        method="POST"
        class="flex flex-col"
      >
        @csrf

        {{-- Email --}}
        <div class="mb-2 flex flex-col gap-2">
          <label
            for="email"
            class="font-semibold"
          >Email <span class="text-red-400">*</span></label>

          <input
            type="email"
            name="email"
            placeholder="Email"
            class="@error('email') border-red-500 @enderror w-full border-2 p-2"
          >

          @error('email')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-2 flex flex-col gap-2">
          <label
            for="password"
            class="font-semibold"
          >Senha <span class="text-red-400">*</span></label>
          <input
            type="password"
            name="password"
            placeholder="Senha"
            class="@error('password') border-red-500 @enderror w-full border-2 p-2"
          >

          @error('password')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <button
          type="submit"
          class="habit-shadow-lg mt-4 cursor-pointer rounded bg-orange-500 px-4 py-2 font-bold transition hover:bg-orange-500/80"
        >
          Entrar
        </button>
      </form>

      <p class="mt-4 text-center text-gray-800/75">
        Não tem uma conta?
        <a
          href="{{ route('site.register') }}"
          class="text-orange-600 transition hover:underline hover:opacity-80"
        >
          Registrar-se
        </a>
      </p>

    </section>

  </main>
</x-layout>
