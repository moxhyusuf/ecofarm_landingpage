<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'nama_program' => 'Smart Eco Farm',
                'deskripsi' => 'Program pertanian berkelanjutan berbasis teknologi untuk meningkatkan produktivitas, efisiensi, dan kesejahteraan petani desa.',
                'ringkasan' => 'Smart Eco Farm merupakan inisiatif pengembangan pertanian modern yang mengintegrasikan teknologi digital, Internet of Things (IoT), dan praktik ramah lingkungan. Program ini membantu petani memantau kondisi tanah, cuaca, dan tanaman secara real-time sehingga pengambilan keputusan menjadi lebih tepat. Selain meningkatkan hasil panen, Smart Eco Farm juga mendorong pertanian berkelanjutan yang menjaga keseimbangan ekosistem serta meningkatkan daya saing produk pertanian desa.',
                'slug' => 'smart-eco-farm',
                'thumb_url' => 'program/smart-eco-farm.jpg',
                'status' => 'active',
                'proposal_url' => 'program/smart-eco-farm.pdf',
                'durasi' => '1 tahun',
                'target_peserta' => 'Lansia',
                'lokasi' => 'Desa cakrawala',
            ],
            [
                'nama_program' => 'UMKM Academy',
                'deskripsi' => 'Program pelatihan dan pendampingan UMKM untuk meningkatkan kapasitas bisnis dan pemasaran digital.',
                'ringkasan' => 'UMKM Academy hadir sebagai wadah pengembangan pelaku usaha mikro, kecil, dan menengah melalui pelatihan terpadu dan pendampingan berkelanjutan. Program ini membekali peserta dengan keterampilan manajemen usaha, branding, pemasaran digital, serta pengelolaan keuangan. Dengan dukungan mentor dan jejaring bisnis, UMKM Academy diharapkan mampu menciptakan UMKM yang mandiri, inovatif, dan berdaya saing tinggi di pasar lokal maupun nasional.',
                'slug' => 'umkm-academy',
                'thumb_url' => 'program/umkm-academy.jpg',
                'status' => 'planning',
                'proposal_url' => 'program/umkm-academy.pdf',
                'durasi' => '-',
                'target_peserta' => '-',
                'lokasi' => '-',
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
