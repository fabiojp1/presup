<?php

use Illuminate\Database\Seeder;
use App\categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(tablacategoriaseeder::class);
    }
}
