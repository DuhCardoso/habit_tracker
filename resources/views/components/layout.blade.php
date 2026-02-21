<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <title>{{ config('app.name') }}</title>
  <link
    rel="icon"
    type="image/x-icon"
    sizes="32x32"
    href="{{ asset('favicon.png') }}"
  >

  <link
    rel="preconnect"
    href="https://fonts.googleapis.com"
  >
  <link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin=""
  >
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
    rel="stylesheet"
  >

  @vite('resources/css/app.css')
</head>

<body class="relative flex min-h-screen flex-col bg-orange-100 font-mono">
  {{-- Hearder --}}
  <x-header />

  {{-- Main content --}}
  {{ $slot }}

  {{-- Footer --}}
  <x-footer />

  {{-- Toast Message --}}
  <x-toast />
  <script src="{{ Vite::asset('resources/js/toast.js') }}"></script>
</body>

</html>
