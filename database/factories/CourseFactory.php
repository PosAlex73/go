<?php

namespace Database\Factories;

use App\Enums\Courses\CourseStatus;
use App\Enums\Courses\CourseType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'status' => CourseStatus::ACTIVE,
            'type' => CourseType::FREE,
            'position' => 0
        ];
    }
}
