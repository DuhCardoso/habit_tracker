<x-layout>
  <main class="container mx-auto p-10">
    <section class="bg-white mt-4 max-w-xl mx-auto p-10 rounded border-2 shadow">
      <h1 class="text-3xl text-gray-800 font-bold mb-4">Registre-se</h1>
      <p class="mb-6 text-gray-800/75">Entre com seus dados para criar uma conta.</p>

      <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col  ">
        @csrf



        {{-- Name --}}
        <div class="flex flex-col gap-2 mb-2">
          <label for="Name" class="font-semibold ">Nome:</label>

          <input
            type="text"
            name="name"
            placeholder="Nome"
            class="border p-2 w-full @error('name') border-red-500 @enderror"
          >

          @error("name")
            <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror
        </div>

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

        {{-- Password --}}
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

        {{-- Password-cofirmation --}}
        <div class="flex flex-col gap-2 mb-2">
          <label for="password_confirmation" class="font-semibold">Confirme a Senha:</label>
          <input
            type="password"
            name="password_confirmation"
            placeholder="Confirme a Senha"
            class="border p-2 w-full @error('password') border-red-500 @enderror"
          >


          @error("password")
            <p class="text-red-500 text-sm">{{ $message }}</p>
          @enderror
        </div>

        <button
          type="submit"
          class="bg-orange-500 text-white px-4 py-2 rounded cursor-pointer hover:bg-orange-500/80 transition mt-4"
        >
            Cadastrar
        </button>
      </form>

      <p class="mt-4 text-gray-800/75">Não tem uma conta? <a href="{{ route('site.register') }}" class="text-orange-500 underline hover:opacity-60 transition">Cadastre-se</a></p>

    </section>



  </main>
</x-layout>
