<header class="bg-white border-b-2  ">
  <div class="flex items-center justify-between p-4 max-w-7xl mx-auto">
    {{-- Logo --}}
    <a class=" flex gap-2 items-center rounded font-bold " href="{{ route('site.index') }}">
      <button class=" px-2 py-1 bg-orange-500  cursor-pointer habit-shadow-lg">
        HT
      </button>
      <span>Habit Tracker</span>
    </a>

    <div class="flex items-center gap-2 ">
      @guest
        <form action="{{ route('site.register') }}" method="GET">
          <button class="px-2 py-1 font-bold rounded cursor-pointer hover:bg-gray-200 habit-shadow-lg">Cadastrar</button>
        </form>
        <form action="{{ route('site.login') }}" method="GET">
          <button
            class="bg-orange-500 text-white font-bold px-2 py-1 rounded cursor-pointer hover:bg-orange-600 habit-shadow-lg">Logar</button>
        </form>
      @endguest

      @auth
        <form action="{{ route('habits.index') }}" method="GET">
          <button type="submit"
            class="px-2 py-1 font-bold rounded cursor-pointer hover:bg-gray-200 habit-shadow-lg">Habitos</button>
        </form>
        <form action="{{ route('auth.logout') }}" method="POST">
          @csrf
          <button type="submit"
            class="bg-red-500 text-white font-bold px-2 py-1 rounded cursor-pointer hover:bg-red-600 habit-shadow-lg">Sair</button>
        </form>
      @endauth

      {{-- Github --}}
      <a href="https://github.com/DuhCardoso/habit_tracker" target="_blank"
        class="flex items-center gap-1 hover:bg-gray-200 transition habit-shadow-lg px-2 py-1 rounded cursor-pointer">
        <x-icons.githubIcon />
      </a>
    </div>
  </div>
</header>