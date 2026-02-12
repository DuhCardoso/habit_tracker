<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    /** @use HasFactory<\Database\Factories\HabitFactory> */
    use HasFactory;

    protected $fillable =[
        'user_id',
        'name'
    ];

    // Muitos logs pertencem a um hábito
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }

    // Um habito pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
