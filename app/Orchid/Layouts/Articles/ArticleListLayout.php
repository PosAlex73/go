<?php

namespace App\Orchid\Layouts\Articles;

use App\Models\Article;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use function Termwind\render;

class ArticleListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'articles';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('#')->render(function (Article $article) {
               return CheckBox::make('articles[]')->value($article->id)->checked(false);
            }),
            TD::make('image')->render(function (Article $article) {
                return view('admin.images.custom_image', ['image' => $article->image]);
            }),
            TD::make('title')->render(Function (Article $article) {
                return Link::make($article->title)->route('platform.articles.create', ['article' => $article]);
            }),
            TD::make('status')->render(function (Article $article) {
                return $article->status;
            }),
            TD::make('created_at'),
            TD::make('updated_at')
        ];
    }
}
