<x-layout>
  <main class="container m-auto mt-20 max-w-5xl">

    <x-navbar />

    <x-title>
      Historico
    </x-title>

    <div class="flex gap-2">
      @foreach ($avalibeYear as $year)
        <a
          href="{{ route('habits.history', $year) }}"
          class="{{ $selectedYear == $year ? 'bg-orange-500 border-3' : 'bg-white habit-shadow-lg' }} mb-4 cursor-pointer p-2 font-bold"
        >
          {{ $year }}
        </a>
      @endforeach
    </div>

    {{-- History --}}
    <div>
      @forelse($habits as $habit)
        <x-contribution
          :habit="$habit"
          :year="$selectedYear"
        />
      @empty
        <div>
          <p class="mb-2 text-black">
            Nenhum hábito para exibir histórico.
          </p>
          <a href="{{ route('habits.create') }}">
            <button
              class="habit-shadow-lg mb-6 cursor-pointer rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600"
            >
              + Habito
            </button>
          </a>
        </div>
      @endforelse
    </div>

  </main>
</x-layout>
