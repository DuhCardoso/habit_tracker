<x-layout>
  <main class="container m-auto mt-20 max-w-5xl">
    <section class="habit-shadow-lg mx-auto mt-4 max-w-xl rounded border-2 bg-white p-10">
      <h1 class="mb-4 text-3xl font-bold text-gray-800">Editar Hábito</h1>

      <form
        action="{{ route('habits.update', $habit->id) }}"
        method="POST"
        class="flex flex-col"
      >
        @csrf
        @method('PUT')

        <div class="mb-4">
          <label
            for="name"
            class="mb-2 block font-semibold text-gray-700"
          >Nome do Hábito:</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="{{ $habit->name }}"
            class="habit-shadow-lg w-full rounded border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
            required
            value="{{ old('name', $habit->name) }}"
          >
          @error('name')
            <p class="text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <button
          type="submit"
          class="habit-shadow-lg cursor-pointer rounded bg-orange-500 px-4 py-2 text-white transition-colors hover:bg-orange-600"
        >
          Editar Hábito
        </button>
      </form>
    </section>
  </main>
</x-layout>
