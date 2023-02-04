<?php

namespace App\Orchid\Layouts\Courses;

use App\Enums\Courses\CourseStatus;
use App\Enums\Courses\CourseType;
use App\Models\Category;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class CourseCreateLayout extends Rows
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
            Input::make('course.title')->title(__('Title')),
            TextArea::make('course.short_description')->title(__('Short description')),
            Quill::make('course.description')->title(__('Description')),
            Select::make('course.status')->options(CourseStatus::getForForm())->title(__('Status')),
            Select::make('course.type')->options(CourseType::getForForm())->title(__('Course type')),
            Relation::make('course.category_id')
                ->title(__('Category'))
                ->fromModel(Category::class, 'title'),

        ];
    }
}
