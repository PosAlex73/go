<?php

namespace App\Orchid\Screens\Courses;

use App\Models\Course;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CourseList extends Screen
{
    public $course;


    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'courses' => Course::paginate(config('system.paginate'))
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'CourseList';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Create course'))
                ->icon('pencil')
                ->route('platform.courses.create'),

            Button::make(__('Remove courses'))->icon('trash')->method('remove')
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
            \App\Orchid\Layouts\Courses\CourseList::class
        ];
    }

    public function remove(Request $request)
    {
        Course::destroy($request->get('courses'));
        Alert::success(__('Courses were delete'));

        return redirect()->route('platform.courses');
    }
}
