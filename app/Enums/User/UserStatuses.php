<?php

namespace App\Enums\User;

use App\Enums\Enumable;

class UserStatuses
{
    use Enumable;

    const ACTIVE = 'A';
    const DISABLED = 'D';
    const BANNED = 'B';
}
