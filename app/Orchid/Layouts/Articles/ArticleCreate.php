<?php

namespace App\Orchid\Layouts\Articles;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Layouts\Rows;

class ArticleCreate extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('article.title')->required()->title(__('Title')),
            Quill::make('article.text')
                ->toolbar(["text", "color", "header", "list", "format", "media"])->title(__('Text')),
            Picture::make('article.image')->title(__('Image'))->value('article.image')
        ];
    }
}
