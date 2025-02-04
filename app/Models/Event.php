<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'date', 'time', 'location'];

    protected $casts = [
        'date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class, 'event_participant');
    }

    public function managers(): BelongsToMany
    {
        return $this->belongsToMany(Manager::class, 'event_manager');
    }
}
