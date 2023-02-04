<?php

namespace App\Orchid\Layouts\Pathnotes;

use App\Models\PathNote;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PathnoteListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'pathnotes';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('#')
                ->render(function (PathNote $note) {
                    return CheckBox::make('pathnotes[]')->value($note->id)->checked(false);
                }),
            TD::make('pathnote.description')
                ->width('100px')
                ->render(fn (PathNote $note) => Link::make($note->description)->route('platform.pathnotes.create', ['pathnote' => $note])),
            TD::make('pathnote.type')->render(function (PathNote $note) {
                return view('admin.fields.pathnote_type', ['type' => $note->type]);
            })
        ];
    }
}
