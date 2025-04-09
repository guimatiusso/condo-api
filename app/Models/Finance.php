<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finance extends Model
{
    use HasFactory;

    protected $fillable = [
        'unity_id',
        'condominium_id',
        'type',
        'value',
        'description',
        'due_date',
        'pay_day',
        'status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'due_date' => 'date',
        'pay_day' => 'datetime',
    ];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }

    public function condominium()
    {
        return $this->belongsTo(Condominium::class);
    }
}
