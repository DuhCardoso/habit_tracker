<x-layout>
  <main class="container mx-auto p-10 ">

    <h1 class="text-2xl font-bold mb-4">Home!</h1>

    <p class="mb-4">Aqui estão seus hábitos:</p>

    <ul class="list-disc pl-5">
      @foreach ($habits as $habit)
        <li>{{ $habit }}</li>
      @endforeach
    </ul>
  </main>
</x-layout>
