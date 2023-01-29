<?php

namespace App\Enums\User;

use App\Enums\Enumable;

class UserProgressStatuses
{
    use Enumable;

    const IN_PROGRESS = 'I';
    const DONE = 'D';
    const NEW_TASK = 'N';
}
