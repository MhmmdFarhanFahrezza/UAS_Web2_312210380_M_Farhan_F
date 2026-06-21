<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReportSeeder extends Seeder
{
    public function run()
    {
        $names = [
            'Budi Santoso', 'Siti Aminah', 'Joko Widodo', 'Ani Lestari', 'Agus Setiawan', 
            'Dewi Sartika', 'Rizky Pratama', 'Linda Wijaya', 'Aditya Nugraha', 'Maya Indah', 
            'Eko Prasetyo', 'Ratna Sari', 'Deni Kusuma', 'Putri Cahaya', 'Hendra Wijaya', 
            'Siska Amelia', 'Bambang Pamungkas', 'Indah Permata', 'Rian Hidayat', 'Mega Utami',
            'Taufik Hidayat', 'Yulia Sari', 'Farhan Maulana', 'Dian Sastrowardoyo', 'Iman Budiman',
            'Lulu Tobing', 'Surya Saputra', 'Desi Ratnasari', 'Anang Hermansyah', 'Krisdayanti',
            'Raffi Ahmad', 'Nagita Slavina', 'Baim Wong', 'Paula Verhoeven', 'Atta Halilintar',
            'Aurel Hermansyah', 'Deddy Corbuzier', 'Ivan Gunawan', 'Soimah Pancawati', 'Andre Taulany',
            'Sule', 'Nunung', 'Tukul Arwana', 'Cak Lontong', 'Raditya Dika', 'Ernest Prakasa',
            'Pandji Pragiwaksono', 'Bintang Emon', 'Kiky Saputri', 'Marshel Widianto'
        ];

        $contents = [
            'Infrastruktur' => [
                'Jalan berlubang di depan pasar induk sudah sangat parah dan membahayakan pengendara.',
                'Lampu jalan mati di sepanjang Jalan Sudirman, membuat jalanan gelap gulita di malam hari.',
                'Jembatan kayu di desa kami sudah mulai rapuh, mohon segera diperbaiki.',
                'Trotoar di depan sekolah banyak yang pecah dan sulit dilewati pejalan kaki.',
                'Pipa air bersih bocor di perumahan Griya Indah, air terbuang percuma.',
                'Drainase di wilayah kami mampet, setiap hujan deras selalu terjadi genangan.',
                'Pagar pembatas jalan di tikungan tajam rusak setelah tertabrak kendaraan.',
                'Pembangunan gedung baru di samping rumah saya debunya sangat mengganggu.',
                'Aspal di gang mawar mengelupas, motor sering terpeleset kalau lewat.',
                'Tiang listrik miring di dekat lapangan, takut roboh menimpa warga.'
            ],
            'Keamanan' => [
                'Sering terjadi aksi balap liar setiap sabtu malam di jalan lingkar luar.',
                'Banyak preman nongkrong di terminal yang sering meminta uang secara paksa.',
                'Pencurian kendaraan bermotor di lingkungan kami mulai marak, butuh patroli lebih sering.',
                'Gangguan kebisingan dari cafe sebelah yang memutar musik keras sampai dini hari.',
                'Ada oknum yang sering melakukan pungutan liar di tempat parkir umum.',
                'Terjadi perkelahian antar pemuda di simpang empat tadi sore.',
                'Orang asing yang mencurigakan sering terlihat mondar-mandir di perumahan kami.',
                'Penyalahgunaan narkoba di area taman kota sungguh meresahkan orang tua.',
                'Lampu merah dipadamkan secara ilegal oleh oknum tertentu.',
                'Aksi vandalisme di tembok puskesmas merusak pemandangan.'
            ],
            'Kesehatan' => [
                'Pelayanan di puskesmas sangat lamban, antrean pasien menumpuk sampai keluar.',
                'Tumpukan sampah di tempat penampungan sementara sudah mengeluarkan bau tidak sedap.',
                'Banyak nyamuk di lingkungan kami, mohon dilakukan fogging segera.',
                'Obat untuk pasien BPJS sering kosong di apotek rumah sakit umum.',
                'Dokter jaga jarang ada di tempat saat dibutuhkan warga di malam hari.',
                'Limbah bengkel dibuang langsung ke selokan, air menjadi hitam dan bau.',
                'Fogging belum dilakukan di daerah kami meskipun sudah ada kasus DBD.',
                'Fasilitas toilet di RSUD sangat kotor dan tidak terawat.',
                'Banyak pedagang kaki lima di depan sekolah yang menjual makanan tidak higienis.',
                'Asap dari pabrik pembakaran sampah sangat menyesakkan nafas warga sekitar.'
            ],
            'Lainnya' => [
                'Urusan administrasi di kantor kelurahan dipersulit oleh petugas.',
                'Bantuan sosial tidak tepat sasaran, banyak warga mampu yang malah dapat.',
                'Pohon peneduh di tepi jalan sudah terlalu rimbun dan kabel listrik tertutup.',
                'Jadwal pengambilan sampah rumah tangga tidak tentu, sampah menumpuk di depan rumah.',
                'Biaya parkir di pasar melebihi ketentuan yang seharusnya.',
                'Pembagian sertifikat tanah yang dijanjikan pemerintah belum juga terealisasi.',
                'Kualitas air dari PDAM sering keruh dan berbau kaporit sangat kuat.',
                'Izin mendirikan bangunan yang sangat lama proses birokrasinya.',
                'Banyak anjing liar berkeliaran yang membahayakan anak-anak saat bermain.',
                'Pengemis di lampu merah jumlahnya semakin banyak dan mengganggu kenyamanan.'
            ]
        ];

        $categories = [
            1 => 'Infrastruktur',
            2 => 'Keamanan',
            3 => 'Kesehatan',
            4 => 'Lainnya'
        ];

        $statuses = ['pending', 'proses', 'selesai'];

        for ($i = 0; $i < 100; $i++) {
            $catId = rand(1, 4);
            $catName = $categories[$catId];
            $contentList = $contents[$catName];
            
            $data = [
                'reporter_name' => $names[array_rand($names)],
                'category_id'   => $catId,
                'content'       => $contentList[array_rand($contentList)],
                'status'        => $statuses[array_rand($statuses)],
                'created_at'    => date('Y-m-d H:i:s', strtotime('-' . rand(0, 30) . ' days -' . rand(0, 23) . ' hours'))
            ];

            $this->db->table('reports')->insert($data);
        }
    }
}
