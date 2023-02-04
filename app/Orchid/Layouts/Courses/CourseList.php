<?php

namespace App\Orchid\Layouts\Courses;

use App\Models\Course;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CourseList extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'courses';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Course $course) {
                    return Link::make($course->title)
                        ->route('platform.courses.create', $course);
                }),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
