<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="container mx-auto p-4 underline">
    <h1 class="text-2xl font-bold mb-4">Olá, {{ $name }}!</h1>
    <p class="mb-4">Aqui estão seus hábitos:</p>
    <ul class="list-disc pl-5">
      @foreach ($habits as $habit)
        <li>{{ $habit }}</li>
      @endforeach
    </ul>
  </div>
</body>
</html>
