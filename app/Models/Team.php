<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    public function department(): BelongsTo{
        return $this->belongsTo(Division::class);
    }
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

}
