<x-layout>
  <main class="container m-auto mt-20">

    <x-navbar />


    @auth

      @session('success')
        <div class="max-w-max bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
          {{ session('success') }}
        </div>
      @endsession
      <a href="{{ route('habits.create') }}">
        <button
          class="bg-orange-500 text-white px-4 py-2 rounded mb-6 hover:bg-orange-600 habit-shadow-lg cursor-pointer">
          + Habito
        </button>
      </a>

      <div>
        <h2 class="text-lg text-gray-800 mb-3">
          Configurações dos Habitos
        </h2>

        <ul class="list-disc list-inside">
          @forelse($habits as $habit)
            <li class="flex items-center justify-between gap-2 mb-2 p-2 habit-shadow-lg bg-orange-200">
              <div class="flex gap-2 items-center">
                <input type="checkbox" class="w-5 h-5" {{ $habit->is_completed ? 'checked' : '' }} disabled>

                <p class="font-lg font-bold {{ $habit->is_completed ? 'line-through text-gray-500' : '' }}">
                  {{ $habit->name }}
                </p>
              </div>

              <div class="flex gap-2 items-center">
                {{-- Delete habit --}}
                <form action="{{ route('habits.destroy', $habit) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="bg-red-500 text-white p-1 rounded hover:bg-red-600 transition-colors cursor-pointer habit-shadow">
                    <x-icons.trash />
                  </button>
                </form>

                {{-- Edit habit --}}
                <a href="{{ route('habits.edit', $habit) }}" class="">
                  <button
                    class="bg-green-500 text-white p-1 rounded hover:bg-green-600 transition-colors cursor-pointer habit-shadow">
                    <x-icons.edit />
                  </button>
                </a>
              </div>
            </li>
          @empty
            <p class="text-gray-600">Você ainda não tem hábitos cadastrados.</p>
            <a href="{{ route('habits.create') }}" class="text-blue-500 hover:underline">
              Adicionar novo hábito
            </a>
          @endforelse
        </ul>
      </div>
    @endauth
    </ul>
  </main>
</x-layout>