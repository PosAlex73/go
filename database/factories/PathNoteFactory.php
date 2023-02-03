<?php

namespace Database\Factories;

use App\Enums\System\PathTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PathNote>
 */
class PathNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(),
            'type' => PathTypes::BUG
        ];
    }
}
