<?php

declare(strict_types=1);


use App\Orchid\Screens\Articles\ArticleList;
use App\Orchid\Screens\Articles\ArticlesCreate;
use App\Orchid\Screens\Categories\CategoryCreate;
use App\Orchid\Screens\Categories\Categorylist;
use App\Orchid\Screens\Courses\CourseCreate;
use App\Orchid\Screens\Courses\CourseList;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\Images\ImageCreate;
use App\Orchid\Screens\Images\ImageList;
use App\Orchid\Screens\News\NewCreate;
use App\Orchid\Screens\News\NewsList;
use App\Orchid\Screens\Orders\OrderCreate;
use App\Orchid\Screens\Orders\OrderList;
use App\Orchid\Screens\Pathnotes\PathNoteCreate;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\Tasks\TaskCreate;
use App\Orchid\Screens\Tasks\TaskList;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push(__('User'), route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Role'), route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example screen'));

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', Idea::class, 'platform.screens.idea');

Route::screen('courses', CourseList::class)->name('platform.courses');
Route::screen('tasks', TaskList::class)->name('platform.tasks');
Route::screen('news', NewsList::class)->name('platform.news');
Route::screen('images', ImageList::class)->name('platform.images');
Route::screen('categories', Categorylist::class)->name('platform.categories');
Route::screen('articles', ArticleList::class)->name('platform.articles');
Route::screen('orders', OrderList::class)->name('platform.orders');
Route::screen('pathnotes', App\Orchid\Screens\Pathnotes\PathNoteList::class)->name('platform.path_notes');

Route::screen('courses/create/{course?}', CourseCreate::class)->name('platform.courses.create');
Route::screen('tasks/create/{task?}', TaskCreate::class)->name('platform.tasks.create');
Route::screen('news/create/{new?}', NewCreate::class)->name('platform.news.create');
Route::screen('images/create{image?}', ImageCreate::class)->name('platform.images.create');
Route::screen('categories/create/{category?}', CategoryCreate::class)->name('platform.categories.create');
Route::screen('articles/create/{article?}', ArticlesCreate::class)->name('platform.articles.create');
Route::screen('orders/create/{orders?}', OrderCreate::class)->name('platform.orders.create');
Route::screen('pathnotes/create/{pathnote?}', PathNoteCreate::class)->name('platform.pathnotes.create');

