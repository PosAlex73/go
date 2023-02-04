<?php

namespace App\Orchid\Screens\Articles;

use App\Models\Article;
use App\Orchid\Layouts\Articles\ArticleListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;

class ArticleList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'articles' => Article::paginate(config('system.paginate'))
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ArticleList';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Create article'))->icon('plus')->route('platform.articles.create'),
            Button::make(__('Remove articles'))->icon('close')->method('remove')->type(Color::DANGER())
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
            ArticleListLayout::class
        ];
    }

    public function remove(Request $request)
    {
        $articles = $request->get('articles');
        Article::destroy($articles);

        Alert::info(__('Articles were deleted'));

        return redirect()->route('platform.articles');
    }
}
