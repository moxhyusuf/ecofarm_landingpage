<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'no_telepon' => '6282143316913',
                'email' => 'desa.cakrawala.online@gmail.com',
                'website_url' => 'https://desacakrawala.com',
                'facebook' => null,
                'instagram' => null,
                'alamat' => 'Desa Cakrawala, Kecamatan Maju, Kota Batu, Jawa Timur',
            ]
        );
    }
}
