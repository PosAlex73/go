<?php

namespace App\Orchid\Layouts\Courses;

use App\Models\Course;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
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
            TD::make('#')->render(function (Course $course) {
                return CheckBox::make('courses[]')->value($course->id)->checked(false);
            }),
            TD::make('title', 'Title')
                ->render(function (Course $course) {
                    return Link::make($course->title)
                        ->route('platform.courses.create', $course);
                }),
            TD::make('status')->render(function (Course $course) {
                return view('admin.fields.course_status', ['status' => $course->status]);
            }),
            TD::make('type')->render(function (Course $course) {
                return view('admin.fields.course_types', ['type' => $course->type]);
            }),
            TD::make('position'),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
