<?php

namespace App\Models;

use App\Enums\ReservationStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'comum_area_id',
        'user_id',
        'reserved_at',
        'begin_reservation',
        'end_reservation',
        'status',
    ];

    protected $casts = [
        'reserved_at' => 'datetime',
        'begin_reservation' => 'datetime',
        'end_reservation' => 'datetime',
        'status' => ReservationStatus::class
    ];

    public function comumArea()
    {
        return $this->belongsTo(ComumArea::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
