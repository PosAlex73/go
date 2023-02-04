<?php

namespace App\Orchid\Layouts\Categories;

use App\Enums\CommonStatuses;
use Faker\Core\Color;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class CategoryCreateLayout extends Rows
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
            Input::make('category.title')->required()->title(__('Title')),
            TextArea::make('category.description')->required()->title(__('Description')),
            Select::make('category.status')->options(CommonStatuses::getForForm())->title(__('Status')),
            Group::make([
                Button::make('Save')->method('create')->type(\Orchid\Support\Color::DEFAULT()),
                Button::make('Delete')->method('remove')->type(\Orchid\Support\Color::DANGER())
            ])
        ];
    }
}
