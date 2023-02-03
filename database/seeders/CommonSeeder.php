<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Category;
use App\Models\Course;
use App\Models\Order;
use App\Models\Task;
use App\Models\Thread;
use App\Models\UserAchieve;
use App\Models\UserProfile;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AppNewSeeder::class,
            ImageSeeder::class,
            PathNoteSeeder::class,
            CategorySeeder::class,
            User::class
        ]);

        \App\Models\User::factory()
            ->count(50)
            ->create();

        $categories = Category::all();

        foreach ($categories as $category) {
            Article::factory()
                ->count(5)
                ->for($category)
                ->create();

            Course::factory()
                ->count(mt_rand(3, 5))
                ->for($category)
                ->create();
        }
        $articles = Article::all();
        $users = \App\Models\User::all();

        foreach ($articles as $article) {
            $comments_count = mt_rand(0, 5);
            $user = $users->random();
            ArticleComment::factory()
                ->count($comments_count)
                ->for($article)
                ->create([
                    'user_id' => $user->id
                ]);
        }

        $courses = Course::all();
        foreach ($courses as $course) {
            Task::factory()
                ->count(12)
                ->for($course)
                ->create();
        }

        foreach ($users as $user) {
            Thread::factory()->count(1)->for($user)->create();
            UserProfile::factory()->count(1)->for($user)->create();
            UserAchieve::factory()->count(mt_rand(1, 10))->for($user)->create();
            Order::factory()->count(mt_rand(1, 3))->for($user)->create();
        }
    }
}
