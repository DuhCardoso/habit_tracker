<x-layout>
  <main class="container m-auto">
    <section class="max-w-150 habit-shadow-lg mx-auto space-y-6 border-2 bg-white px-4 py-6 md:px-10">
      <div class="flex flex-col gap-2">
        <h1 class="text-3xl font-bold text-gray-800">Registre-se</h1>
        <p class="mb-6 text-gray-800/75">Entre com seus dados para criar uma conta.</p>
      </div>

      <form
        action="{{ route('auth.register') }}"
        method="POST"
        class="flex flex-col"
      >
        @csrf

        {{-- Name --}}
        <div class="mb-2 flex flex-col gap-2">
          <label
            for="Name"
            class="font-semibold"
          >
            Nome <span class="text-red-400">*</span>
          </label>

          <input
            type="text"
            name="name"
            placeholder="Nome"
            class="@error('name') border-red-500 @enderror -2 w-full border-2 p-2"
          >

          @error('name')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        {{-- Email --}}
        <div class="mb-2 flex flex-col gap-2">
          <label
            for="email"
            class="font-semibold"
          >
            Email <span class="text-red-400">*</span>
          </label>

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

        {{-- Password --}}
        <div class="mb-2 flex flex-col gap-2">
          <label
            for="password"
            class="font-semibold"
          >
            Senha <span class="text-red-400">*</span>
          </label>
          <input
            type="password"
            name="password"
            placeholder="Senha"
            class="@error('password') -2-red-500 @enderror w-full border-2 p-2"
          >

          @error('password')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        {{-- Password-cofirmation --}}
        <div class="mb-2 flex flex-col gap-2">
          <label
            for="password_confirmation"
            class="font-semibold"
          >
            Confirme a Senha <span class="text-red-400">*</span>
          </label>
          <input
            type="password"
            name="password_confirmation"
            placeholder="Confirme a Senha"
            class="@error('password') border-red-500 @enderror -2 w-full border-2 p-2"
          >

          @error('password')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <button
          type="submit"
          class="habit-shadow-lg mt-4 cursor-pointer rounded bg-orange-500 px-4 py-2 text-white transition hover:bg-orange-500/80"
        >
          Cadastrar
        </button>
      </form>

      <p class="mt-4 text-center text-gray-800/75">
        Já tem uma conta?
        <a
          href="{{ route('site.login') }}"
          class="text-orange-600 transition hover:underline hover:opacity-80"
        >
          Faça login
        </a>
      </p>

    </section>

  </main>
</x-layout>
