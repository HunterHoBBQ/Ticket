<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrivateTicketTransaction;

class PrivateTicketTransactionSeeder extends Seeder
{
    public function run()
    {
        PrivateTicketTransaction::factory(10)->create();
    }
}

