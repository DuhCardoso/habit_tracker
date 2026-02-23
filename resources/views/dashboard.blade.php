<x-layout>
  <main class="container m-auto mt-20 max-w-5xl">

    <x-navbar />

    {{-- Main --}}
    <div>

      <x-title>
        {{ Carbon\Carbon::now()->locale('pt-BR')->translatedFormat('l, d \d\e F') }}
      </x-title>

      <ul class="list-inside list-disc">

        @forelse($habits as $habit)
          <li class="habit-shadow-lg mb-2 flex items-center gap-2 bg-orange-200 p-2">
            <form
              class="flex items-center gap-2"
              action="{{ route('habits.toggle', $habit->id) }}"
              method="POST"
              id="form-{{ $habit->id }}"
            >
              @csrf
              <input
                type="checkbox"
                class="h-5 w-5"
                {{ $habit->wasCompletedToday() ? 'checked' : '' }}
                onChange="document.getElementById('form-{{ $habit->id }}').submit()"
              >

              <p class="font-lg {{ $habit->wasCompletedToday() ? 'line-through text-gray-500' : '' }} font-bold">
                {{ $habit->name }}
              </p>
            </form>
          </li>

        @empty
          <p class="mb-2 text-gray-600">Você ainda não tem
            hábitos cadastrados.</p>
        @endforelse
      </ul>

      <a href="{{ route('habits.create') }}">
        <button
          class="habit-shadow-lg mb-6 cursor-pointer rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600"
        >
          + Habito
        </button>
      </a>
    </div>
  </main>
</x-layout>
