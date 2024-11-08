<?php
declare(strict_types=1);

namespace App\Enums;

enum OccurrenceType: string
{
    case COMPLAIN = 'complain';
    case MAINTENANCE = 'maintenance';
    case SECURITY = 'security';
}
