<?php

namespace App\Enums;

enum ReservationStatus: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case CANCELLED = 'cancelled';
    case COMPLETED = 'completed';
    case EXPIRED = 'expired';
}
