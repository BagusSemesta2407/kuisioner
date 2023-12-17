<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kuesioner;

class PertanyaanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tata Pamong
        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Tersedia prosedur layanan akademik yang jelas sehingga memudahkan mahasiswa untuk mengikuti proses belajar</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Tersedia peraturan pendidikan yang jelas sebagai panduan mahasiswa untuk menjalankan proses belajar</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa mendapat kemudahan pelayanan saat mengakses sistem informasi elearning</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Mahasiswa meyakini bahwa peraturan pendidikan dilakasanakan secara adil</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Mahasiswa meyakini bahwa perkuliahan dan evaluasi terlaksana dengan baik</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Mahasiswa mendapatkan dispensasi atas konpensasi dengan alasan yang dapat dipahami oleh struktural</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Memberikan jaminan atas penyampaian kritik, saran, dan keluhan secara bebas dan mandiri</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa mendapatkan informasi yang jelas terkait rencana pembelajaran semester, tata laksana perkuliahan setiap pertemuan, pengawasan oleh pembimbing akademik, dan evaluasi perkuliahan serta sistem akademik</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'responsiveness',
            'pertanyaan' => '<p>Mahasiswa mendapat penanganan dengan cepat saat mengahadapi permasalahan terkait dengan jadwal dan kalender akademik pada hari kerja</p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Tata Pamong',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Mahasiswa pernah mendapat pendampingan/sosialisasi saat PKKMB terkait penggunaan sistem informasi akademik dan elearning</p>',
        ]);


        // Kemahasiswaan
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa mendapat fasilitas layanan kemahasiswaan (layanan kesehatan) yang tersedia dikampus</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa mendapat fasilitas layanan kemahasiswaan (bimbingan karir) yang tersedia dikampus</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa mendapat fasilitas layanan kemahasiswaan (bimbingan konseling) yang tersedia dikampus</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa mendapat fasilitas layanan kemahasiswaan (organisasi kemahasiswaan) yang tersedia dikampus</p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Mahasiswa dapat memanfaatkan layanan kemahasiswaan dikampus (beasiswa, lomba akademis maupun non akademis, dan organisasi mahasiswa)</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa mendapat layanan dengan tepat waktu terkait dengan bimbingan konseling, bimbingan karir, dan organisasi kemahasiswaan</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa meyakini fasilitas layanan kemahasiswaan yang ada dikampus dapat digunakan</p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'responsiveness',
            'pertanyaan' => '<p>Mahasiswa memperoleh respon terkait permasalahan layanan kemahasiswaan </p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Mahasiswa memperoleh pendampingan dari pihak kampus terkait lomba akademis </p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Kemahasiswaan',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Mahasiswa memperoleh pendampingan dari pihak kampus terkait layanan kemahasiswaan</p>',
        ]);


        // Sarana Prasana
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa mendapat sarana dan prasarana pendukung kegiatan proses belajar(ruang kelas, ruang tutorial, laboratorium, serta alat-alat pendukung lainnya seperti wifi, meja, kursi, dan LCD)</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Tersedia kantin yang menyediakan menu beragam di lingkungan kampus</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Tersedia sarana dan prasarana yang brfungsi dengan baik</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa mendapatkan kemudahan dalam memanfaatan sarana dan prasarana(fasilitas ibadah, olahraga, kesehatan, transportasi)</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Fasilitas tempat parkir</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Ruangan setiap kelas bersih, rapi dan nyaman</p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Mahasiswa meyakini sarana dan prasarana yang ada dikampus dapat digunakan</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa mendapat layanan dengan tepat waktu terkait dengan pengaduan fasilitas yang digunakan</p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'responsiveness',
            'pertanyaan' => '<p>Mahasiswa mendapat respon yang cepat dan struktural terkait pengaduan permasalahan sarana dan prasarana</p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Sarana Prasana',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Menyediakan fasilitas sarana dan prasarana untuk proses pembelajaran, penelitian, dan sarana prasarana lainnya</p>',
        ]);

        
        // Keuangan
        Kuesioner::create([
            'kategori' => 'Keuangan',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa dapat mengakses sistem pembayaran UKT secara online</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Keuangan',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Mahasiswa mendapatkan pelayanan dari petugas bagian keuangan yang kompeten</p>',
        ]);
        
        Kuesioner::create([
            'kategori' => 'Keuangan',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa mendapat pemberitahuan apabila proses pembayaran UKT telah selesai</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Keuangan',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa dapat mengajukan kegiatan untuk pendanaan kemahasiswaan dengan mudah dan transparan</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Keuangan',
            'aspek' => 'responsiveness',
            'pertanyaan' => '<p>Mahasiswa memperoleh respon terkait permasalahan layanan pembayaran UKT</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Keuangan',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Mahasiswa mendapatkan pendampingan dari petugas bagian keuangan ketika kesulitan mengakses sistem pembayaran uang kuliah</p>',
        ]);



        // Pendidikan
        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Mahasiswa difasilitasi presensi, penyampaian materi, penugasan, dan penilaian evaluasi belajar oleh dosen</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Tesedia buku panduan akademik, buku panduan pkl, dan buku panduan pengerjaan tugas akhir</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Mahasiswa meyakini sistem presensi, penyampaian materi, penugasan, dan penilaian evaluasi belajar oleh dosen dapat diandalkan </p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa mendapatkan waktu untuk tanya jawab dan bimbingan akademis oleh dosen</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa diajar oleh dosen yang menguasai materi perkuliahan</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa mendapatkan pelayanan administrasi akademik yang kompeten</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'responsiveness',
            'pertanyaan' => '<p>Mahasiswa mendapatkan jawaban yang responsif terkait informasi akademik</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Pendidikan',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Mahasiswa mendapat pendampingan terkait permasalahan akademik oleh dosen wali</p>',
        ]);


        // Penelitian
        Kuesioner::create([
            'kategori' => 'Penelitian',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Ketersediaan sarana prasarana pendukung untuk kegiatan penelitian</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Penelitian',
            'aspek' => 'tangibles',
            'pertanyaan' => '<p>Fasilitas memperoleh informasi/pelayanan tentang kegiatan Penelitian</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Penelitian',
            'aspek' => 'assurance',
            'pertanyaan' => '<p>Terdapat kesempatan untuk dilibatkan dalam penelitian dosen</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Penelitian',
            'aspek' => 'reliability',
            'pertanyaan' => '<p>Mahasiswa mendapatkan pembimbingan penulisan tugas akhir oleh dosen yang sesuai dengan bidang keahliannya</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Penelitian',
            'aspek' => 'responsiveness',
            'pertanyaan' => '<p>Dosen memberi umpan balik terhadap tugas akhir mahasiswa</p>',
        ]);

        Kuesioner::create([
            'kategori' => 'Penelitian',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Mahasiswa mendapat kesempatan untuk memperoleh bantuan tugas akhir</p>',
        ]);
        Kuesioner::create([
            'kategori' => 'Penelitian',
            'aspek' => 'empathy',
            'pertanyaan' => '<p>Mahasiswa mendapat dukungan dalam melakukan penelitian dan publikasi karya ilmiah</p>',
        ]);
    }
}
