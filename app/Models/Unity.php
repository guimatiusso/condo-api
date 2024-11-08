<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Unity extends Model
{
    protected $table = 'unity';

    protected $fillable = [
        'number', 'block', 'floor', 'condominium_id', 'user_id'
    ];

    public function condominiuim(): BelongsTo
    {
        return $this->belongsTo(Condominium::class);
    }

    public function resident(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
