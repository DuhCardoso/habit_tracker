@php
  $type = session()->has('success') ? 'success' : (session()->has('error') ? 'error' : 'warning');
  $message = session($type);

  $styles = [
      'success' => 'border-green-400 bg-green-100 text-green-700',
      'error' => 'border-red-400 bg-red-100 stroke-red-700',
      'warning' => 'border-yellow-400 bg-yellow-100 stroke-yellow-700',
  ];
@endphp

@if (session()->has('success') || session()->has('error') || session()->has('warning'))
  <div
    id="toast"
    class="top-22 absolute right-20"
  >
    <div class="{{ $styles[$type] }} mb-4 flex max-w-max items-center gap-2 rounded border px-4 py-3">
      {{-- Icon --}}
      <x-dynamic-component
        :component="'icons.' . $type"
        class="mb-4"
      />

      {{-- Message --}}
      <p>{{ $message }}</p>
    </div>

  </div>
@endif
