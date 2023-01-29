<?php

namespace App\Enums\Thread;

use App\Enums\Enumable;

class MessageStatuses
{
    use Enumable;

    const READ = 'R';
    const UNREAD = 'U';
}
