<x-layout>
  <main class="container mx-auto p-10 ">
    <section class="bg-white mt-4 max-w-xl mx-auto p-10 rounded border-2 shadow">
      <h1 class="text-3xl text-gray-800 font-bold mb-4">Criar Novo Hábito</h1>

      <form action="{{ route('habits.store') }}" method="POST" class="flex flex-col  ">
        @csrf

        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-semibold mb-2">Nome do Hábito:</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Ex: Tomar agua..."
            class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-500"
            required
          >
          @error("name")
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>


        <button
          type="submit"
          class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition-colors cursor-pointer"
        >
          Criar Hábito
        </button>
      </form>
    </section>
  </main>
</x-layout>
