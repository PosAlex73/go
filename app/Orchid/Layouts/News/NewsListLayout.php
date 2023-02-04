<?php

namespace App\Orchid\Layouts\News;

use App\Models\AppNew;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class NewsListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'app_news';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('#')->render(function (AppNew $new) {
                return CheckBox::make('news')->checked(false)->value($new->id);
            }),
            TD::make('title')->render(function (AppNew $new) {
                return Link::make($new->title)->route('platform.news.create', ['new' => $new]);
            }),
            TD::make('status')->render(function (AppNew $new) {
                return view('admin.fields.common_status', ['status' => $new->status]);
            }),
            TD::make('updated_at'),
            TD::make('created_at')
        ];
    }
}
