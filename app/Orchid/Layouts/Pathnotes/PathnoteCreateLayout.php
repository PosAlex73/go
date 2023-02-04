<?php

namespace App\Orchid\Layouts\Pathnotes;

use App\Enums\System\PathTypes;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class PathnoteCreateLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            TextArea::make('pathnote.description'),
            Select::make('pathnote.type')->options(PathTypes::getForForm())
        ];
    }
}
