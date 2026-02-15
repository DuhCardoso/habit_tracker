<x-layout>
  <main class="container mx-auto p-10 ">

    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    @auth

    @session('success')
    <div class="max-w-max bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
      {{ session('success') }}
    </div>
    @endsession

    <a href="{{ route('habits.create') }}">
      <button
        class="bg-orange-500 text-white px-4 py-2 rounded mb-6 hover:bg-orange-600 transition-colors cursor-pointer"
      >
        + Habito
      </button>
    </a>

      <h1 class="text-2xl font-bold mb-4">Bem-vindo, {{ $userName }}!</h1>

      <h2 class="text-xl font-semibold mb-3">Seus Hábitos:</h2>

      <ul class="list-disc list-inside">
      @forelse($habits as $habit)
          <li class="flex gap-2 mb-2">
            <span class="font-medium border-r pr-2">
              {{ $habit->name }}
            </span>

            <span class="text-sm text-gray-600 border-r pr-2">
              Criado em {{ $habit->created_at->format('d/m/Y') }}
            </span>

            <span class="text-sm text-gray-600">
                Concluido: [ {{ $habit->habitLogs->count() }}x ]
            </span>

            {{-- Delete habit --}}
            <form action="{{ route('habits.destroy', $habit) }}" method="POST">
              @csrf
              @method('DELETE')

              <button
              type="submit"
              class="bg-red-500 text-white p-1 rounded hover:bg-red-600 transition-colors cursor-pointer"
              >
                <x-icons.trash/>
              </button>
            </form>
          </li>
        @empty
        <p class="text-gray-600">Você ainda não tem hábitos cadastrados.</p>
        <a
          href="{{ route('habits.create') }}"
          class="text-blue-500 hover:underline"
        >
          Adicionar novo hábito
        </a>
      @endforelse
      </ul>
    @endauth



    </ul>
  </main>
</x-layout>
