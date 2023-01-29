<?php

namespace App\Enums\Courses;

use App\Enums\Enumable;

class CourseStatus
{
    use Enumable;

    const ACTIVE = 'A';
    const DISABLE = 'D';
    const IN_PROGRESS = 'I';
    const NOT_READY = 'N';
}
