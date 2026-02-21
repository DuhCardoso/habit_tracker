<x-layout>
  <main class="container m-auto mt-20 max-w-5xl">

    <x-navbar />

    @session('success')
      <div class="mb-4 max-w-max rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700">
        {{ session('success') }}
      </div>
    @endsession
    <a href="{{ route('habits.create') }}">
      <button class="habit-shadow-lg mb-6 cursor-pointer rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600">
        + Habito
      </button>
    </a>

    <div>
      <h2 class="mb-3 text-lg text-gray-800">
        Configurações dos Habitos
      </h2>

      <ul class="list-inside list-disc">
        @forelse($habits as $habit)
          <li class="habit-shadow-lg mb-2 flex items-center justify-between gap-2 bg-orange-200 p-2">
            <div class="flex items-center gap-2">
              <p class="font-lg font-bold">
                {{ $habit->name }}
              </p>
            </div>

            <div class="flex items-center gap-2">
              {{-- Delete habit --}}
              <form
                action="{{ route('habits.destroy', $habit) }}"
                method="POST"
              >
                @csrf
                @method('DELETE')
                <button
                  type="submit"
                  class="habit-shadow cursor-pointer rounded bg-red-500 p-1 text-white transition-colors hover:bg-red-600"
                >
                  <x-icons.trash />
                </button>
              </form>

              {{-- Edit habit --}}
              <a
                href="{{ route('habits.edit', $habit) }}"
                class=""
              >
                <button
                  class="habit-shadow cursor-pointer rounded bg-green-500 p-1 text-white transition-colors hover:bg-green-600"
                >
                  <x-icons.edit />
                </button>
              </a>
            </div>
          </li>
        @empty
          <p class="text-gray-600">Você ainda não tem
            hábitos cadastrados.</p>
          <a href="{{ route('habits.create') }}">
            <button
              class="habit-shadow-lg mb-6 cursor-pointer rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600"
            >
              + Habito
            </button>
          </a>
        @endforelse
      </ul>

    </div>
  </main>
</x-layout>
