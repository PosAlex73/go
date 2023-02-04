<?php

namespace App\Orchid\Layouts\Images;

use App\Enums\CommonStatuses;
use App\Enums\System\ImageTypes;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class ImageCreateLayout extends Rows
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
            Input::make('image.title')->title(__('Title')),
            Select::make('image.status')->options(CommonStatuses::getForForm())->title(__('Status')),
            Select::make('image.type')->options(ImageTypes::getForForm())->title(__('Type')),
            Picture::make('image.path')
        ];
    }
}
