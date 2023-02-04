<?php

namespace App\Orchid\Layouts\News;

use App\Enums\CommonStatuses;
use App\Models\AppNew;
use Illuminate\Support\Facades\App;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class NewCreateLayout extends Rows
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
            Input::make('app_new.title')->title(__('Title')),
            Quill::make('app_new.description')->title(__('Description')),
            Select::make('app_new.status')->options(CommonStatuses::getForForm())->title(__('Status')),
            Picture::make('app_new.image')
        ];
    }
}
