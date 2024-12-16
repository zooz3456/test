<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    public function division(): BelongsTo{
        return $this->belongsTo(Division::class);
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

}
