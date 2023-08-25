<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PrivateTicketTransaction;
use App\Models\User;
use App\Models\PublicTicketTransaction;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrivateTicketTransaction>
 */
class PrivateTicketTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $publicTransaction = PublicTicketTransaction::inRandomOrder()->first();
        $randomUserId = User::inRandomOrder()->value('id');
        $user = User::inRandomOrder()->first();


        return [
            // 'user_id' => $randomUserId,
            'user_id' => $user->id,
            'transaction_id' => $publicTransaction->transaction_id,
            'ticket_status' => $this->faker->boolean,
            'credit' => $this->faker->randomFloat(2, 0, 100),
            'soft_delete' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
