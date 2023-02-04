<?php

namespace App\Orchid\Screens\Tasks;

use App\Models\Task;
use App\Orchid\Layouts\Tasks\TableListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;

class TaskList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'tasks' => Task::paginate(config('system.paginate'))
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'TaskList';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Create task'))->route('platform.tasks.create')->icon('plus'),
            Button::make(__('Remove'))->method('remove')->type(Color::DANGER())
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
            TableListLayout::class
        ];
    }

    public function remove(Request $request)
    {
        Task::destroy($request->get('tasks'));
        Alert::success(__('Task were delete'));

        return redirect()->route('platform.tasks');
    }
}
