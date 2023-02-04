<?php

namespace App\Orchid\Screens\Courses;

use App\Models\Course;
use App\Orchid\Layouts\Courses\CourseCreateLayout;
use Orchid\Screen\Screen;

class CourseCreate extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Course $course): iterable
    {
        return [
            'course' => $course
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'CourseCreate';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            CourseCreateLayout::class
        ];
    }
}
