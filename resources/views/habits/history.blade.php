<x-layout>
  <main class="container m-auto mt-20 max-w-7xl">

    <x-navbar />
    @auth

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

    @endauth
    </ul>
  </main>
</x-layout>
