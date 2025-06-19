<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
    public function games(): HasMany
    {
        return $this->hasMany(Game::class, 'team1_id')
            ->orWhere('team2_id', $this->id);
    }
}
