<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $statuses = CommonStatuses::getAll();
        $status_key = array_rand($statuses);

        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->text(),
            'status' => $statuses[$status_key]
        ];
    }
}
