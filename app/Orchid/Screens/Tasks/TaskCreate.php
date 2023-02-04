<?php

namespace App\Orchid\Screens\Tasks;

use App\Models\Task;
use App\Orchid\Layouts\Tasks\TaskCreateLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class TaskCreate extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Task $task): iterable
    {
        return [
            'task' => $task
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'TaskCreate';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Back'))->icon('left')->route('platform.tasks'),
            Button::make(__('Save'))->icon('plus')->method('save'),
            Button::make(__('Remove'))->icon('trash')->method('remove')
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
            TaskCreateLayout::class
        ];
    }

    public function save(Task $task, Request $request)
    {
        $task->data = '';
        $task->fill($request->get('task'))->save();
        Alert::success(__('Task save'));

        return redirect()->route('platform.tasks');
    }

    public function remove(Task $task)
    {
        $task->delete();
        Alert::success(__('Task was delete'));

        return redirect()->route('platform.tasks');
    }
}
