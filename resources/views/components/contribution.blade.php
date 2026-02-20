@props(['habit', 'year' => null])

@php
  $selectedYear = $year ?? now()->year;

  $weeks = App\Models\Habit::generateYearGrid($selectedYear);
@endphp

<div class="mb-6">
  {{-- NOME + ANO --}}
  <div class="mb-3 flex items-center justify-between">
    <h2 class="text-lg font-bold">
      {{ $habit->name }}
    </h2>
    <span class="text-sm font-semibold text-gray-600">
      {{ $selectedYear }}
    </span>
  </div>

  {{-- GRID --}}
  <div class="habit-shadow-lg bg-orange-50 p-2">
    <div class="flex w-full justify-between gap-1">
      @foreach ($weeks as $week)
        <div class="flex flex-col gap-1">
          @foreach ($week as $day)
            @if ($day === null)
              {{-- Espaço vazio para alinhar semanas --}}
              <div class="h-3 w-3"></div>
            @else
              <div
                class="rounded-xs {{ $habit->wasCompletedOn($day) ? 'bg-orange-600' : 'bg-[#DADFE9]' }} h-3 w-3 cursor-pointer transition hover:ring-2 hover:ring-blue-400"
                title="{{ $day->format('d/m/Y') }} - {{ $day->translatedFormat('l') }}"
              ></div>
            @endif
          @endforeach
        </div>
      @endforeach
    </div>
  </div>

  {{-- LEGENDA --}}
  <div class="mt-2 flex items-center gap-4 text-sm text-gray-600">
    <div class="flex items-center gap-1.5">
      <div class="rounded-xs h-3 w-3 bg-[#DADFE9]"></div>
      <span>Não feito</span>
    </div>
    <div class="flex items-center gap-1.5">
      <div class="rounded-xs h-3 w-3 bg-orange-600"></div>
      <span>Feito</span>
    </div>
  </div>
</div>
