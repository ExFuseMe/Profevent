<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'phone', 'group'];

    public function events(): BelongsToMany
    {
        return $this->BelongsToMany(Event::class, 'event_participant', 'participant_id', 'event_id');
    }
}
