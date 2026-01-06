<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{

    public function run(): void
    {
        $faq = [
            [
                'program_id' => 1,
                'pertanyaan' => 'Apa itu Program Smart Eco Farm?',
                'jawaban' => 'Smart Eco Farm adalah program pengembangan pertanian berkelanjutan yang memanfaatkan teknologi IoT untuk memantau kondisi tanah, cuaca, dan tanaman secara real-time guna meningkatkan produktivitas dan efisiensi pertanian.',
            ],
            [
                'program_id' => 1,
                'pertanyaan' => 'Siapa saja yang bisa mengikuti Program Smart Eco Farm?',
                'jawaban' => 'Program ini terbuka untuk petani desa, kelompok tani, serta masyarakat yang tertarik pada pertanian modern dan berkelanjutan. Peserta akan mendapatkan pelatihan dan pendampingan selama program berlangsung.',
            ],
        ];


        foreach ($faq as $item) {
            Faq::create($item);
        };
    }
}
