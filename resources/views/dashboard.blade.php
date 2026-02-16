<x-layout>
  <main class="container m-auto mt-20">

    <x-navbar />

    @auth
      @session('success')
        <div class="max-w-max bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
          {{ session('success') }}
        </div>
      @endsession
      <div>
        <h2 class="text-lg text-gray-700 mb-3">
          {{ date('d/m/y') }}
        </h2>

        <ul class="list-disc list-inside">
          @forelse($habits as $habit)
            <li class="flex items-center gap-2 mb-2 p-2 habit-shadow-lg bg-orange-200">
              <div class="flex gap-2 items-center">
                <input type="checkbox" class="w-5 h-5" {{ $habit->is_completed ? 'checked' : '' }} disabled>

                <p class="font-lg font-bold {{ $habit->is_completed ? 'line-through text-gray-500' : '' }}">
                  {{ $habit->name }}
                </p>
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