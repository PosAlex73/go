<?php

namespace App\Orchid\Screens\Images;

use App\Models\Image;
use App\Orchid\Layouts\Images\ImageCreateLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ImageCreate extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Image $image): iterable
    {
        return [
            'image' => $image
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ImageCreate';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Back'))->icon('left')->route('platform.images'),
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
            ImageCreateLayout::class
        ];
    }

    public function save(Image $image, Request $request)
    {
        $image->fill($request->get('image'))->save();
        Alert::success(__('Image was save'));

        return redirect()->route('platform.images');
    }

    public function remove(Image $image)
    {
        $image->delete();
        Alert::success(__('Image was delete'));

        return redirect()->route('platform.images');
    }
}
