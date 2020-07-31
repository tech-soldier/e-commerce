<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedCategoriesTable::class);
        $this->call(SeedWatchesTable::class);
        $this->call(SeedAdminsTable::class);
        $this->call(SeedCustomersTable::class);
        $this->call(SeedTaxesTable::class);
        $this->call(SeedOrderWatchesTable::class);
        $this->call(SeedTransactionsTable::class);
    }
}
