<?php

namespace App\Orchid\Layouts\Tasks;

use App\Models\Task;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TableListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'tasks';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('#')->render(function (Task $task) {
                return CheckBox::make('tasks[]')->value($task->id)->checked(false);
            }),
            TD::make('title')->render(function (Task $task) {
                return Link::make($task->title)->route('platform.tasks.create', ['task' => $task]);
            }),
            TD::make('course')->render(function (Task $task) {
                return Link::make($task->course->title)->route('platform.courses.create', ['course' => $task->course]);
            }),
            TD::make('status')->render(function (Task $task) {
                return view('admin.fields.common_status', ['status' => $task->status]);
            }),
            TD::make('type')->render(function (Task $task) {
                return view('admin.fields.task_types', ['type' => $task->type]);
            })
        ];
    }
}
