<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GaleriSeeder extends Seeder
{

    public function run(): void
    {
        $galeri = [
            [
                'program_id' => 1,
                'judul' => 'Instalasi Sensor IoT di Lahan Pertanian',
                'deskripsi' => 'Pemasangan sensor kelembaban tanah dan suhu untuk monitoring lahan pertanian secara real-time.',
                'file_path' => 'galeri/smart-eco-farm/iot-sensor-installation.jpg',
            ],
            [
                'program_id' => 1,
                'judul' => 'Pelatihan Petani Smart Farming',
                'deskripsi' => 'Kegiatan pelatihan penggunaan teknologi smart farming bagi petani desa.',
                'file_path' => 'galeri/smart-eco-farm/pelatihan-petani.jpg',
            ],
            [
                'program_id' => 1,
                'judul' => 'Monitoring Tanaman via Dashboard',
                'deskripsi' => 'Petani memantau kondisi tanaman melalui dashboard digital berbasis web.',
                'file_path' => 'galeri/smart-eco-farm/dashboard-monitoring.jpg',
            ],
            [
                'program_id' => 1,
                'judul' => 'Proses Penanaman Bibit Organik',
                'deskripsi' => 'Tahap awal penanaman bibit organik pada lahan Smart Eco Farm.',
                'file_path' => 'galeri/smart-eco-farm/penanaman-bibit.jpg',
            ],
            [
                'program_id' => 1,
                'judul' => 'Panen Hasil Pertanian Berkelanjutan',
                'deskripsi' => 'Hasil panen pertanian berkelanjutan yang dikelola dengan sistem Smart Eco Farm.',
                'file_path' => 'galeri/smart-eco-farm/panen-berkelanjutan.jpg',
            ],
        ];

        foreach ($galeri as $item) {
            Galeri::create($item);
        };
    }
}
