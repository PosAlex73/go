<?php

namespace Database\Factories;

use App\Enums\User\AchievementTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAchieve>
 */
class UserAchieveFactory extends Factory
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
            'description' => $this->faker->text(),
            'achievement' => $this->faker->text(10),
            'type' => AchievementTypes::COMMON
        ];
    }
}
