<x-layout>
  <main class="container m-auto">
    <section class="bg-white max-w-150 mx-auto px-4 md:px-10 py-6 space-y-6 border-2 habit-shadow-lg">
      <div class="flex flex-col gap-2">
        <h1 class="text-3xl font-black">Login</h1>
        <p class="mb-6 text-gray-800/75">Entre com seus dados para acessar sua conta.</p>
      </div>

      <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col">
        @csrf

        {{-- Email --}}
        <div class="flex flex-col gap-2 mb-2">
          <label for="email" class="font-semibold ">Email <span class="text-red-400">*</span></label>

          <input type="email" name="email" placeholder="Email"
            class="border-2 p-2 w-full @error('email') border-red-500 @enderror">

          @error('email')
            <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-2">
          <label for="password" class="font-semibold">Senha <span class="text-red-400">*</span></label>
          <input type="password" name="password" placeholder="Senha"
            class="border-2 p-2 w-full @error('password') border-red-500 @enderror">

          @error('password')
            <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <button type="submit"
          class="bg-orange-500 font-bold px-4 py-2 rounded cursor-pointer hover:bg-orange-500/80 transition mt-4 habit-shadow-lg">
          Entrar
        </button>
      </form>

      <p class="mt-4 text-gray-800/75">Não tem uma conta? <a href="{{ route('site.register') }}"
          class="text-orange-500 underline hover:opacity-60 transition">Cadastre-se</a></p>

    </section>



  </main>
</x-layout>