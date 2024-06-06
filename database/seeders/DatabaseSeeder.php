<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FactorSeeder;
use Database\Seeders\DimensionSeeder;
use Database\Seeders\MadurityLevelSeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FactorSeeder::class);
        $this->call(DimensionSeeder::class);
        $this->call(MadurityLevelSeeder::class);
    }
}
