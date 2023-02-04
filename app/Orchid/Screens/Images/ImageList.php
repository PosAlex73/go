<?php

namespace App\Orchid\Screens\Images;

use App\Models\Image;
use App\Orchid\Layouts\Images\ImageListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ImageList extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'images' => Image::paginate(config(__('system.paginate')))
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ImageList';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add image'))
                ->icon('pencil')
                ->route('platform.images.create'),

            Button::make(__('Remove images'))->icon('trash')->method('remove')
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
            ImageListLayout::class
        ];
    }

    public function remove(Request $request)
    {
        Image::destroy($request->get('images'));
        Alert::success(__('Images were delete'));

        return redirect()->route('platform.images');
    }
}
