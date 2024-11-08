<?php
declare(strict_types=1);

namespace App\Enums;

enum OccurrenceStatus: string
{
    case OPEN = 'open';
    case ONGOING = 'ongoing';
    case SOLVED = 'solved';
}
