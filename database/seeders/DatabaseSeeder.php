<?php

namespace Database\Seeders;

use Database\Seeders\FaqSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\GaleriSeeder;
use Database\Seeders\ProgramSeeder;
use Database\Seeders\SiteSettingSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SiteSettingSeeder::class,
            ProgramSeeder::class,
            GaleriSeeder::class,
            FaqSeeder::class,
        ]);
    }
}
