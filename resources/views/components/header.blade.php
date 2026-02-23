<header class="border-b-2 bg-white">
  <div class="mx-auto flex max-w-7xl items-center justify-between p-4">
    {{-- Logo --}}
    <a
      class="flex items-center gap-2 rounded font-bold"
      href="{{ route('site.index') }}"
    >
      <button class="habit-shadow-lg cursor-pointer bg-orange-500 px-2 py-1">
        HT
      </button>
      <span>Habit Tracker</span>
    </a>

    <div class="flex items-center gap-2">
      @guest
        <form
          action="{{ route('site.register') }}"
          method="GET"
        >
          <button class="habit-shadow-lg cursor-pointer rounded px-2 py-1 font-bold hover:bg-gray-200">Cadastrar</button>
        </form>
        <form
          action="{{ route('site.login') }}"
          method="GET"
        >
          <button
            class="habit-shadow-lg cursor-pointer rounded bg-orange-500 px-2 py-1 font-bold text-white hover:bg-orange-600"
          >Logar</button>
        </form>
      @endguest

      @auth
        <form
          action="{{ route('habits.index') }}"
          method="GET"
        >
          <button
            type="submit"
            class="habit-shadow-lg cursor-pointer rounded px-2 py-1 font-bold hover:bg-gray-200"
          >Dashboard</button>
        </form>
        <form
          action="{{ route('auth.logout') }}"
          method="POST"
        >
          @csrf
          <button
            type="submit"
            class="habit-shadow-lg cursor-pointer rounded bg-red-500 px-2 py-1 font-bold text-white hover:bg-red-600"
          >Sair</button>
        </form>
      @endauth

      {{-- Github --}}
      <a
        href="https://github.com/DuhCardoso/habit_tracker"
        target="_blank"
        class="habit-shadow-lg flex cursor-pointer items-center gap-1 rounded px-2 py-1 transition hover:bg-gray-200"
      >
        <x-icons.githubIcon />
      </a>
    </div>
  </div>
</header>
