<?php

namespace App\Enums\Courses;

use App\Enums\Enumable;

class TaskType
{
    use Enumable;

    const THEORY = 'T';
    const TEST = 'P';
    const PRACTICE = 'R';
}
