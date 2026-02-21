<x-layout>
  <main class="container m-auto mt-20 max-w-5xl">

    <x-navbar />

    @auth
      {{-- Message Success --}}
      @session('success')
        <div class="mb-4 max-w-max rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700">
          {{ session('success') }}
        </div>
      @endsession

      {{-- Main --}}
      <div>

        <h2 class="mb-3 text-lg text-gray-700">
          {{ date('d/m/y') }}
        </h2>

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
    @endauth
    </ul>
  </main>
</x-layout>
