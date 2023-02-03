<?php

namespace Database\Factories;

use App\Enums\User\UserStatuses;
use App\Enums\User\UserTypes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'status' => UserStatuses::ACTIVE,
            'type' => UserTypes::SIMPLE,
            'password' => Hash::make('user'),
            'permissions' => '',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
