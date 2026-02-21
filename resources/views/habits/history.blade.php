<x-layout>
  <main class="container m-auto mt-20 max-w-5xl">

    <x-navbar />

    <div class="flex gap-2">
      @foreach ($avalibeYear as $year)
        <a
          href="{{ route('habits.history', $year) }}"
          class="{} {{ $selectedYear == $year ? 'bg-orange-500 border-3' : 'bg-white habit-shadow-lg' }} my-4 cursor-pointer p-2 font-bold"
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
          <p class="text-black">
            Nenhum hábito para exibir histórico.
          </p>
          <a
            href="{{ route('habits.create') }}"
            class="underline"
          >
            Crie um novo hábito
          </a>
        </div>
      @endforelse
    </div>

    </ul>
  </main>
</x-layout>
