<header class="bg-white border-b-2 flex items-center justify-between p-4">
  {{--Logo  --}}
  <a href="{{ route('site.index') }}">Logo</a>

  <div class="flex items-center gap-5">
  {{-- Github --}}
  <div>github</div>

  @auth
    <form action="{{ route('auth.logout') }}" method="POST">
      @csrf
      <button type="submit" class="bg-red-500/75 text-white px-4 py-2 rounded">Sair</button>
    </form>
  @endauth

  @guest
    <form action="{{ route('site.login') }}" method="GET">
      <button class="bg-orange-500/80 text-white px-4 py-2 rounded">Login</button>
    </form>
  @endguest
  </div>
</header>
