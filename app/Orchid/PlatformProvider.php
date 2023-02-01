<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
            Menu::make(__('Courses'))->icon('user')->route('platform.courses')->title(__('Courses')),
            Menu::make(__('Tasks'))->icon('user')->title(__('Tasks'))->route('platform.tasks'),
            Menu::make(__('Categories'))->icon('user')->title(__('Categories'))->route('platform.categories'),
            Menu::make(__('Orders'))->icon('user')->title(__('Orders'))->route('platform.orders'),
            Menu::make(__('Images'))->icon('user')->title(__('Images'))->route('platform.images'),
            Menu::make(__('Articles'))->icon('user')->title(__('Articles'))->route('platform.articles'),
            Menu::make(__('News'))->icon('user')->title('News')->route('platform.news'),
            Menu::make(__('Pathnotes'))->icon('user')->title('Pathnotes')->route('platform.path_notes')
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make(__('Profile'))
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
