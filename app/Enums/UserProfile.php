<?php
declare(strict_types=1);

namespace App\Enums;

enum UserProfile: string
{
    case ADMIN = 'admin';
    case RESIDENT = 'resident';
    case DOORMAN = 'doorman';
}
