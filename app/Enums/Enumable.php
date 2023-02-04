<?php

namespace App\Enums;

trait Enumable
{
    public static function getAll()
    {
        $ref = new \ReflectionClass(static::class);

        return $ref->getConstants();
    }

    public static function getForForm()
    {
        return array_flip(static::getAll());
    }
}
