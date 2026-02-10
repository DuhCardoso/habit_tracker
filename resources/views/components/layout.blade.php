<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>

  @vite('resources/css/app.css')
</head>

<body class="bg-orange-100 min-h-screen flex flex-col">
  {{-- Hearder --}}
  <x-header/>

  {{-- Main content --}}
  {{ $slot }}

  {{-- Footer --}}
  <x-footer/>
</body>
</html>
