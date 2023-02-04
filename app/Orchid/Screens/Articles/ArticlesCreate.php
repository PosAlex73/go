<?php

namespace App\Orchid\Screens\Articles;

use App\Models\Article;
use App\Orchid\Layouts\Articles\ArticleCreate;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ArticlesCreate extends Screen
{
    public Article $article;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Article $article): iterable
    {
        $this->article = $article;

        return [
            'article' => $article
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ArticlesCreate';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        $buttons = [
            Link::make(__('Back'))->icon('left')->route('platform.articles'),
        ];

        if ($this->article->id) {
            $buttons[] = Button::make(__('Remove'))->method('remove')->type(Color::DANGER());
        }

        return $buttons;
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::tabs([
                __('General info') => [
                    ArticleCreate::class
                ],
                __('Article tabs') => [
                    Layout::rows([
                        Input::make('address')
                            ->type('text')
                            ->required(),
                    ]),
                ],
            ]),
        ];
    }

    public function remove(Article $article)
    {
        $article->delete();
        Alert::info('Article was delete');

        return redirect()->route('platform.articles');
    }
}
