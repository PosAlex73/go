<?php

namespace App\Enums\User;

use App\Enums\Enumable;

class UserTypes
{
    use Enumable;

    const ADMIN = 'A';
    const SIMPLE = 'S';
    const MODERATOR = 'M';
}
