<x-layout>
  <main class="container mx-auto p-10 ">

    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    @auth
      <h1 class="text-2xl font-bold mb-4">Bem-vindo, {{ auth()->user()->name }}!</h1>
    @endauth
  </main>
</x-layout>
