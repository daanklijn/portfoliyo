<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Photo;
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
        Collection::factory()
            ->count(10)
            ->hasPhotos(5)
            ->create();
    }
}
