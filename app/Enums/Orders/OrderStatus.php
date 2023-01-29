<?php

namespace App\Enums\Orders;

use App\Enums\Enumable;

class OrderStatus
{
    use Enumable;

    const OPEN = 'O';
    const FAILED = 'F';
    const IN_PROGRESS = 'I';
    const DONE = 'D';
}
