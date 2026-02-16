<nav>
  <ul class="flex gap-4 mb-6  list-none">
    <li>
      <a href="{{ route('habits.index') }}"
        class="{{ Route::is('habits.index') ? 'font-bold underline' : 'text-gray-600' }} pr-4 border-r-2 border-orange-200 hover:text-orange-400 transition">
        Hoje
      </a>
    </li>

    <li>
      <a href="#"
        class="{{ Route::is('habits.inde') ? 'font-bold underline' : 'text-gray-600' }} pr-4 border-r-2 border-orange-200 hover:text-orange-400 transition">
        Historico
      </a>
    </li>

    <li>
      <a href="#"
        class="{{ Route::is('habits.inde') ? 'font-bold underline' : 'text-gray-600' }} pr-4 border-r-2 border-orange-200 hover:text-orange-400 transition">
        Calendario
      </a>
    </li>

    <li>
      <a href="{{ route('habits.settings') }}"
        class="{{ Route::is('habits.settings') ? 'font-bold underline' : 'text-gray-600' }}  hover:text-orange-400 transition">
        Gerenciar Habitos
      </a>
    </li>
  </ul>
</nav>