<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manager extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'phone', 'group', 'active'];

    public function events(): BelongsToMany
    {
        return $this->BelongsToMany(Event::class, 'event_manager', 'manager_id', 'event_id');
    }
}
