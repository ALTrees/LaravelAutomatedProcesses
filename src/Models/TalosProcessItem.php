<?php

namespace ALTrees\Talos\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TalosProcessItem extends Model
{
    use HasFactory;

    public function process(): BelongsTo
    {
        return $this->belongsTo(config('talos.process_model'));
    }
}
