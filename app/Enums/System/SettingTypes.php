<?php

namespace App\Enums\System;

use App\Enums\Enumable;

class SettingTypes
{
    use Enumable;

    public const SELECT = 'select';
    public const INPUT = 'input';
    public const TEXTAREA = 'textarea';
    public const CHECKBOX = 'checkbox';
    public const RADIO = 'radio';
    public const NUMBER = 'number';
    public const FILE = 'file';
    public const IMAGE = 'image';
    public const RICH_TEXT = 'rich_text';
}
