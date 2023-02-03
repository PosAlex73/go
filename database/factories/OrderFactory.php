<?php

namespace Database\Factories;

use App\Enums\Orders\OrderStatus;
use App\Payments\TestPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payment' => TestPayment::class,
            'total' => mt_rand(100, 500),
            'data' => '',
            'status' => OrderStatus::OPEN
        ];
    }
}
