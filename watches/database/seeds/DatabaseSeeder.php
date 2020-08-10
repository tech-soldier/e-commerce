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
        $this->call(SeedUsersTable::class);
        $this->call(SeedTaxesTable::class);
        $this->call(SeedOrderWatchTable::class);
        $this->call(SeedTransactionsTable::class);
        $this->call(SeedOrdersTable::class);
    }
}
