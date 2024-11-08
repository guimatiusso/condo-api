<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ComumArea extends Model
{
    protected $table = 'comum_area';

    protected $fillable = [
        'name', 'description', 'capacity', 'condominium_id'
    ];

    public function condominium(): BelongsTo
    {
        return $this->belongsTo(Condominium::class);
    }
}
