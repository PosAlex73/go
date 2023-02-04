<?php

namespace App\Orchid\Screens\Pathnotes;

use App\Models\PathNote;
use App\Orchid\Layouts\Pathnotes\PathnoteCreateLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class PathNoteCreate extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(PathNote $pathnote): iterable
    {
        return [
            'pathnote' => $pathnote
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'PathNoteCreate';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Back'))->icon('left')->route('platform.path_notes'),
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
            PathnoteCreateLayout::class
        ];
    }

    public function save(PathNote $note, Request $request)
    {
        $note->fill($request->get('pathnote'))->save();
        Alert::success(__('Patch note save'));

        return redirect()->route('platform.path_notes');
    }

    public function remove(PathNote $pathNote)
    {
        $pathNote->delete();
        Alert::success(__('Patch note was delete'));

        return redirect()->route('platform.path_notes');
    }
}
