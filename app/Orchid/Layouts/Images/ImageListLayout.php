<?php

namespace App\Orchid\Layouts\Images;

use App\Models\Article;
use App\Models\Image;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ImageListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'images';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('#')->render(function (Image $image) {
                return CheckBox::make('images[]')->value($image->id)->checked(false);
            }),
            TD::make('image')->render(function (Image $image) {
                return view('admin.images.custom_image', ['image' => $image->path]);
            }),
            TD::make('title')->render(function (Image $image) {
                return Link::make($image->title)->route('platform.images.create', ['image' => $image]);
            }),
            TD::make('updated_at'),
            TD::make('created_at')
        ];
    }
}
