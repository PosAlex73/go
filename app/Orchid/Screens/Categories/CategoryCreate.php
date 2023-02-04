<?php

namespace App\Orchid\Screens\Categories;

use App\Models\Category;
use App\Orchid\Layouts\Categories\CategoryCreateLayout;
use Illuminate\Http\Request;
use Orchid\Alert\Alert;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CategoryCreate extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Category $category): iterable
    {
        return [
            'category' => $category
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return __('Create category');
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Back'))->route('platform.categories')
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
            CategoryCreateLayout::class
        ];
    }

    public function create(Category $category, Request $request)
    {
        $category->fill($request->get('category'))->save();
        \Orchid\Support\Facades\Alert::success(__('Category was created!'));
        return redirect()->route('platform.categories');
    }

    public function remove(Category $category)
    {
        $category->delete();

        \Orchid\Support\Facades\Alert::info(__('Category was deleted'));

        return redirect()->route('platform.categories');
    }
}
