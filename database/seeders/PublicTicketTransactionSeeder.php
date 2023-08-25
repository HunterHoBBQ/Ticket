<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PublicTicketTransaction;

class PublicTicketTransactionSeeder extends Seeder
{
    public function run()
    {
        PublicTicketTransaction::factory(22)->create();
    }
}
