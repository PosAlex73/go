<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Enums\System\ImageTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
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
            'path' => $this->faker->imageUrl(),
            'type' => ImageTypes::COMMON,
            'status' => CommonStatuses::ACTIVE
        ];
    }
}
