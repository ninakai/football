<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;

    public function team1(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function team2(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function goals(): HasMany
    {
        return $this->hasMany(Goal::class, 'game_id');
    }

    public function player(): BelongsToMany
    {
        return $this->belongsToMany(Player::class);
    }
}
