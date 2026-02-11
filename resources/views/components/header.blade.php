<header class="bg-white border-b-2 flex items-center justify-between p-4">
  {{--Logo  --}}
  <a href="{{ route('site.index') }}">Logo</a>

  <div class="flex items-center gap-5">
  {{-- Github --}}
  <div>github</div>

  @auth
    <form action="{{ route('auth.logout') }}" method="POST">
      @csrf
      <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded cursor-pointer hover:bg-red-500/95 transition">Sair</button>
    </form>
  @endauth

  @guest
    <form action="{{ route('site.login') }}" method="GET">
      <button class="bg-orange-500 text-white px-4 py-2 rounded cursor-pointer hover:bg-orange-500/95 transition">Login</button>
    </form>
  @endguest
  </div>
</header>
