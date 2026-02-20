<nav>
  <ul class="mb-6 flex list-none gap-4">
    <li>
      <a
        href="{{ route('habits.index') }}"
        class="{{ Route::is('habits.index') ? 'font-bold underline' : 'text-gray-600' }} border-r-2 border-orange-200 pr-4 transition hover:text-orange-400"
      >
        Hoje
      </a>
    </li>

    <li>
      <a
        href="{{ route('habits.history') }}"
        class="{{ Route::is('habits.history') ? 'font-bold underline' : 'text-gray-600' }} border-r-2 border-orange-200 pr-4 transition hover:text-orange-400"
      >
        Historico
      </a>
    </li>

    <li>
      <a
        href="#"
        class="{{ Route::is('habits.inde') ? 'font-bold underline' : 'text-gray-600' }} border-r-2 border-orange-200 pr-4 transition hover:text-orange-400"
      >
        Calendario
      </a>
    </li>

    <li>
      <a
        href="{{ route('habits.settings') }}"
        class="{{ Route::is('habits.settings') ? 'font-bold underline' : 'text-gray-600' }} transition hover:text-orange-400"
      >
        Gerenciar Habitos
      </a>
    </li>
  </ul>
</nav>
