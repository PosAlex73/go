<?php

namespace App\Orchid\Screens\Courses;

use App\Models\Course;
use App\Orchid\Layouts\Courses\CourseCreateLayout;
use Illuminate\Http\Request;
use Orchid\Alert\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;

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
        return [
            Link::make(__('Back'))->icon('left')->route('platform.courses'),
            Button::make(__('Save'))->icon('plus')->method('create'),
            Button::make(__('Remove'))->icon('trash')->method('remove')->type(Color::DANGER())
        ];
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

    public function create(Course $course, Request $request)
    {
        $course->fill($request->get('course'))->save();
        \Orchid\Support\Facades\Alert::success(__('Course was saved'));

        return redirect()->route('platform.courses');
    }

    public function remove(Request $request)
    {
        Course::destroy($request->get('courses'));
        \Orchid\Support\Facades\Alert::success(__('Courses were delete'));

        return redirect()->route('platform.courses');
    }
}
