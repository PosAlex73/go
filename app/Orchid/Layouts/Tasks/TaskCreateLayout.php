<?php

namespace App\Orchid\Layouts\Tasks;

use App\Enums\CommonStatuses;
use App\Enums\Courses\TaskType;
use App\Models\Course;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\NumberRange;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\TD;

class TaskCreateLayout extends Rows
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
            Input::make('task.title')->title(__('Title')),
            Quill::make('task.description')->title(__('Description')),
            Select::make('task.status')->title(__('Status'))->options(CommonStatuses::getForForm()),
            Select::make('task.type')->title(__('Type'))->options(TaskType::getForForm()),
            Input::make('task.points')->title(__('Points')),
            Relation::make('task.course_id')->title('Course')->fromModel(Course::class, 'title')
        ];
    }
}
