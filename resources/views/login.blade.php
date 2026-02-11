<x-layout>
  <main class="container mx-auto p-10">
    <h1 class="text-2xl font-bold mb-4">Faça Login</h1>

    <section class="mt-4">
      <form action="{{ route('auth.login') }}" method="POST" class="max-w-md">
        @csrf

        @error("email")
          <p class="text-red-500 mt-2">{{ $message }}</p>
        @enderror

        <input
          type="email"
          name="email"
          placeholder="Email"
          class="border p-2 mb-4 w-full"
        >

        <input
          type="password"
          name="password"
          placeholder="Senha"
          class="border p-2 mb-4 w-full"
        >

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
