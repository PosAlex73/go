<?php

namespace App\Orchid\Screens\News;

use App\Models\AppNew;
use App\Orchid\Layouts\News\NewCreateLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class NewCreate extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(AppNew $new): iterable
    {
        return [
            'app_new' => $new
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'NewCreate';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Back'))->icon('left')->route('platform.news'),
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
            NewCreateLayout::class
        ];
    }

    public function save(AppNew $new, Request $request)
    {
        $new->fill($request->get('app_new'))->save();
        Alert::success(__('New was saves'));

        return redirect()->route('platform.news');
    }

    public function remove(Request $request)
    {
        AppNew::destroy($request->get('app_new'));
        Alert::success(__('New was saved'));

        return redirect()->route('platform.news');
    }
}
