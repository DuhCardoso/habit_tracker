<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{

    public function index()
    {
        $habits = Auth::user()->habits;
        $userName = Auth::user()->name;

        return view('dashboard', compact('habits', 'userName'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        Auth::user()->habits()->create($validated);

        return redirect()->route('habits.index')->with(key: 'success', value: 'Hábito criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
          if($habit->user_id !== Auth::id()) {
            abort(403, 'Este hábito não pertence a você.');
        }

        $habit->update($request->all());

        return redirect()->route('habits.index')->with( 'success', 'Habito atuliazado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if($habit->user_id !== Auth::id()) {
            abort(403, 'Este hábito não pertence a você.');
        }

        $habit->delete();

        return redirect()->route('habits.index')->with('success', 'Hábito deletado!');
    }
}
