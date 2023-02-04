<?php

namespace App\Orchid\Screens\News;

use App\Models\AppNew;
use App\Orchid\Layouts\News\NewsListLayout;
use Illuminate\Http\Request;
use Orchid\Alert\Alert;
use Orchid\Alert\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;

class NewsList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'app_news' => AppNew::paginate(config('system.paginate'))
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'NewsList';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Create new'))->route('platform.news.create')->icon('plus'),
            Button::make(__('Remove news'))->method('remove')->type(Color::DANGER())
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
            NewsListLayout::class
        ];
    }

    public function remove(Request $request)
    {
        AppNew::destroy($request->get('news'));
        \Orchid\Support\Facades\Alert::success(__('News were deleted'));

        return redirect()->route('platform.news');
    }
}
