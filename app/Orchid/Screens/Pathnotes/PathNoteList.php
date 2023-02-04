<?php

namespace App\Orchid\Screens\Pathnotes;

use App\Models\PathNote;
use App\Orchid\Layouts\Pathnotes\PathnoteListLayout;
use Illuminate\Http\Request;
use Orchid\Alert\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;

class PathNoteList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'pathnotes' => PathNote::paginate(config('system.paginate'))
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'PathNoteList';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Create patch note'))->route('platform.pathnotes.create')->icon('plus'),
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
            PathnoteListLayout::class
        ];
    }

    public function remove(Request $request)
    {
        PathNote::destroy($request->get('pathnotes'));
        \Orchid\Support\Facades\Alert::success('Patch notes were delete');

        return redirect()->route('platform.path_notes');
    }
}
