<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Enums\Thread\MessageStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleComment>
 */
class ArticleCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => $this->faker->text(),
            'status' => MessageStatuses::READ
        ];
    }
}
