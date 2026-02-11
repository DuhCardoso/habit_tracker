<x-layout>
  <main class="container mx-auto p-10">
    <section class="bg-white mt-4 max-w-xl mx-auto p-10 rounded border-2 shadow">
      <h1 class="text-3xl text-gray-800 font-bold mb-4">Faça Login</h1>
      <p class="mb-6 text-gray-800/75">Entre com seus dados para acessar sua conta.</p>

      <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col  ">
        @csrf



        {{-- Email --}}
        <div class="flex flex-col gap-2 mb-2">
          <label for="email" class="font-semibold ">Email:</label>

          <input
            type="email"
            name="email"
            placeholder="Email"
            class="border p-2 w-full @error('email') border-red-500 @enderror"
          >

          @error("email")
            <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-2">
          <label for="password" class="font-semibold">Senha:</label>
          <input
            type="password"
            name="password"
            placeholder="Senha"
            class="border p-2 w-full @error('password') border-red-500 @enderror"
          >


          @error("password")
            <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <button
          type="submit"
          class="bg-orange-500 text-white px-4 py-2 rounded"
        >
            Entrar
        </button>
      </form>


    </section>



  </main>
</x-layout>
