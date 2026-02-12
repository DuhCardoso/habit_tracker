<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HabitLog>
 */
class HabitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => '1',

            // ira pegar um id de habito aleatorio da tabela habits
            'habit_id' => Habit::query()->inRandomOrder()->first()->id,

            'completed_at' =>
                $this->faker
                ->unique()
                // faker para gerar uma data aleatoria entre 5 dias atras e hoje
                ->dateTimeBetween('-30 days', 'now')
                //formata a data para o formato Y-m-d, que é o formato esperado pelo campo completed_at
                ->format('Y-m-d'),
        ];
    }
}
