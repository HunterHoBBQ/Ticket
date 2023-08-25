<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PublicTicketTransaction;

class PublicTicketTransactionFactory extends Factory
{
    protected $model = PublicTicketTransaction::class;

    public function definition()
    {

        return [
            'transaction_id' => $this->faker->unique()->uuid,
            'game_id' => $this->faker->unique()->numberBetween(200, 1000),
            'amount' => $this->faker->randomFloat(2, 1, 100),
            'draw_date' => now()->addDays(3)->format('Y-m-d'),
            'ticket_date' => now(),
            'soft_delete' => null, // Soft delete column
        ];
    }
}
