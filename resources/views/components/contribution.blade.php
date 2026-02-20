@props(['habit', 'year' => null])

@php
  // Define o ano (padrão: ano atual)
  $selectedYear = $year ?? now()->year;

  // Primeiro e último dia do ano
  $startDate = \Carbon\Carbon::create($selectedYear, 1, 1); // 01/01/YYYY
  $endDate = \Carbon\Carbon::create($selectedYear, 12, 31); // 31/12/YYYY

  $weeks = [];
  $currentWeek = [];

  // Preenche dias vazios no início (se o ano não começar no domingo)
  $firstDayOfWeek = $startDate->dayOfWeek; // 0 = domingo, 1 = segunda, etc
  for ($i = 0; $i < $firstDayOfWeek; $i++) {
      $currentWeek[] = null; // Placeholder vazio
  }

  // Agrupa os dias em semanas (domingo a sábado)
  for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
      $currentWeek[] = $date->copy();

      // Fecha a semana no sábado ou no último dia
      if ($date->isSaturday() || $date->eq($endDate)) {
          $weeks[] = $currentWeek;
          $currentWeek = [];
      }
  }
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
              @php
                $hasDone = $habit->habitLogs->where('completed_at', $day->toDateString())->isNotEmpty();
              @endphp
              <div
                class="rounded-xs {{ $hasDone ? 'bg-orange-600' : 'bg-[#DADFE9]' }} h-3 w-3 cursor-pointer transition hover:ring-2 hover:ring-blue-400"
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
