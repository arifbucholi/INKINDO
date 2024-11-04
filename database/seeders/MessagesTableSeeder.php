<?php

namespace Database\Seeders;

use App\Models\Messages;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        Messages::create([
            'guest_name' => 'Arif',
            'message' => 'INKINDO adalah organisasi terbaik yang bisa membuat negara ini lebih maju!',
        ]);

        Messages::create([
            'guest_name' => 'Aisyah',
            'message' => 'INKINDO telah memberikan kontribusi besar dalam memajukan industri konsultan di Indonesia. Layanan yang ditawarkan sangat profesional dan berorientasi pada kebutuhan anggota.',
        ]);

        Messages::create([
            'guest_name' => 'Afif',
            'message' => 'INKINDO selalu hadir dengan program-program pelatihan yang sangat membantu para konsultan untuk tetap up-to-date dengan perkembangan teknologi dan regulasi terbaru.',
        ]);

        Messages::create([
            'guest_name' => 'Stefani',
            'message' => 'INKINDO menyediakan platform yang solid untuk para konsultan berjejaring, berbagi ilmu, dan berkembang bersama. Keanggotaannya benar-benar membawa banyak manfaat.',
        ]);
    }
}
