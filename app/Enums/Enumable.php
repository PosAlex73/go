<?php

namespace App\Enums;

trait Enumable
{
    public function getAll()
    {
        $ref = new \ReflectionClass(static::class);

        return $ref->getConstants();
    }
}
