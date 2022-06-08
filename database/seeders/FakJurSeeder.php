<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PDO;

class FakJurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fakultas();
        $this->jurusan();
        $this->programKuliah();
    }

    private function fakultas()
    {
        $fakultas = ['Teknologi Industri', 'Sains Terapan', 'Teknologi Mineral', 'Teknologi Informasi dan Bisnis'];
        for ($index = 0; $index < count($fakultas); $index++) {
            $data_fakultas[$index] = [
                'kode_fakultas' => 'FAK0'.strval($index + 1),
                'nama_fakultas' => $fakultas[$index],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        DB::table('fakultas')->truncate();
        DB::table('fakultas')->insert($data_fakultas);
    }

    private function jurusan()
    {
        $fakultas = ['FAK01', 'FAK02', 'FAK03', 'FAK04'];
        $jurusan = ['Magister Rekayasa Mesin', 'Teknik Mesin', 'Teknik Kimia', 'Teknik Industri', 'Teknik Elektro', 'Statistika', 'Teknik Lingkungan', 'Teknik Geologi', 'Informatika', 'Rekayasa Sistem Komputer', 'Bisnis Digital'];
        $data_jurusan = [
            [
                'kode_jurusan' => 'FAK0101',
                'kode_fakultas' => 'FAK01',
                'nama_jurusan' => $jurusan[0],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0102',
                'kode_fakultas' => 'FAK01',
                'nama_jurusan' => $jurusan[1],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0103',
                'kode_fakultas' => 'FAK01',
                'nama_jurusan' => $jurusan[2],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0104',
                'kode_fakultas' => 'FAK01',
                'nama_jurusan' => $jurusan[3],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0105',
                'kode_fakultas' => 'FAK01',
                'nama_jurusan' => $jurusan[4],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0201',
                'kode_fakultas' => 'FAK02',
                'nama_jurusan' => $jurusan[5],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0202',
                'kode_fakultas' => 'FAK02',
                'nama_jurusan' => $jurusan[6],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0301',
                'kode_fakultas' => 'FAK03',
                'nama_jurusan' => $jurusan[7],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0401',
                'kode_fakultas' => 'FAK04',
                'nama_jurusan' => $jurusan[8],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0402',
                'kode_fakultas' => 'FAK04',
                'nama_jurusan' => $jurusan[9],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_jurusan' => 'FAK0403',
                'kode_fakultas' => 'FAK04',
                'nama_jurusan' => $jurusan[10],
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('jurusan')->truncate();
        DB::table('jurusan')->insert($data_jurusan);
    }

    public function programKuliah()
    {

        $programKuliah = [
            ['Beasiswa sampai Lulus', "Adalah jalur penerimaan mahasiswa baru dengan seleksi akademik/non-akademik dan tes seleksi serta wawancara.\n Peserta yang lolos seleksi akan mendapatkan Beasiswa sampai lulus sarjana(S1) atau Diploma 3.\n Mendapat pembebasan dari biaya DPP, SPP Tetap dan SPP Variabel dari semester 1 s/d 8 untuk jenjang S1, dan semester 1 s/d 6 untuk jenjang D3.", "
            Fotocopy rapor semester 1 s/d 5 ( 10 besar di kelas )\n
            Usia pendaftar tidak lebih 20 th pada tanggal 1 Juli 2022\n
            Mengisi Formulir pendaftaraan & pas foto 3×4 (3 lembar)\n
            Diutamakan dari keluarga tidak mampu ( dibuktikan dengan surat keterangan dari kelurahan / kepala desa)\n
            Point tambahan bagi yang memiliki prestasi di bidang: Akademik Kegiatan Ilmiah, Agama, Olah Raga, Kesenian, dll. Minimal juara III tingkat kabupaten/kota dan dibuktikan fotocopy piagam atau sertifikat\n
            Berkas diterima sampai dengan tanggal 20 Mei 2022\n
            Tes tertulis & tes wawancara tanggal 30 Mei – 10 Juni 2022\n
            Pengumuman hasil tes tanggal 17 Juni 2022\n
            Materi tes yang diujikan : Bahasa Inggris, Matematika, dan Tes Potensi Akademik"],
            ['Jalur TBK', "Jalur adalah jalur Penerimaan Mahasiswa Baru melalui seleksi tes berbasis komputer (Online). IST AKPRIND Yogyakarta memberikan kelaluasaan kepada peserta tes dalam memilih waktu tes. Selain itu, peserta juga tidak perlu datang langsung ke kampus karena tes dilaksanakan secara daring. Materi tes berbasis komputer meliputi Bahasa Inggris, Matematika, dan Tes Potensi Akademik (TPA). Hasil Tes dapat diperoleh segera setelah proses seleksi selesai dilaksanakan.", "Biaya Pendaftaran sebesar Rp300.000. "],
            ['Jalur Undangan', "Ditujukan bagi SMA/SMK/MA/Sederajat (yang mendapatkan Undangan dari IST AKPRIND Yogyakarta atau merupakan 10 siswa terbaik di kelas.) Peserta dapat diterima di IST AKPRIND Yogyakarta dan dapat memilih program yang diinginkan. Selain itu, peserta juga bebas biaya pendaftaran.", "
    Mengunggah surat undangan dari IST AKPRIND Yogyakarta atau surat rekomendasi dari sekolah yang bersangkutan yang merupakan 10 siswa terbaik di kelas\n
    Scan rapor semester 1 s/d 5\n
    Berlaku untuk semua gelombang"],
            ['Jalur Prestasi (Tanpa Tes)', "Adalah jalur penerimaan Mahasiswa Baru berbasis Prestasi Akademik (nilai rapor semester 1-5) dan/atau prestasi Non-Akademik di bidang akademik, olahraga, keagamaan, dan seni (paling rendah tingkat kabupaten/kota).", "
    Scan rapor semester 1 s/d 5\n
    Mengisi formulir pendaftaran\n
    Unggah foto terbaru rasio 3:4\n
    Poin tambahan bagi yang memiliki sertifikat prestasi di bidang akademik, olahraga, keagamaan, dan seni (paling rendah tingkat kabupaten/kota)."],
            ['Jalur KIP Kuliah', "Adalah program Kartu Indonesia Pintar (KIP) Kuliah dari pemerintah bagi lulusan SMA/SMK/MA/MAK/Sederajat yang memiliki kemampuan akademik yang baik, tetapi terkendala dengan masalah ekonomi", "Persyaratan, pendaftaran dan informasi lengkap ada di sekolah masing-masing atau di : https://kip-kuliah.kemdikbud.go.id/"],
            ['Jalur Pindahan', "Jalur Pindahan merupakan jalur pendaftaran/transfer bagi mahasiswa dari perguruan tinggi lain atau prodi lain di IST AKPRIND Yogyakarta, dengan persyaratan sebagai berikut:", "
    Minimal telah menempuh pendidikan D-3 atau S-1 selama 1 tahun (2 semester)\n
    Transkrip nilai terbaru (dilegalisir)\n
    Fotokopi Ijazah dan SKHUN SMA/SMK/MA/Sederajat (dilegalisir)\n
    Surat keterangan pindah/pengunduran diri yang diketahui oleh perguruan tinggi asal\n
    Akreditasi program studi asal minimal harus sama dengan akreditasi program studi di IST AKPRIND Yogyakarta"],
            ['Alih Jalur', "Alih jalur merupakan jalur masuk khusus bagi lulusan D-3 yang akan melanjutkan pendidikan ke jenjang S-1.", "Syarat alih jalur adalah sebagai berikut.\n
    Scan ijazah D-3 dan transkrip terbaru dilegalisir\n
    Scan Ijazah & SKHUN SMA/SMK/MA/Sederajat dilegalisir\n
    Scan Konversi nilai dari D-3 ke S-1 (Prosedur Anfulen/penyetaraan SKS)\n
    Dibuka pada semester genap dan ganjil"],
            ['Kelas Karyawan', "Seiring dengan tuntutan dunia kerja terhadap kualitas sumber daya manusia yang semakin lama samakin meningkat, IST AKPRIND Yogyakarta sebagai perguruan tinggi yang berpijak pada bidang sains dan teknologi berkomitmen untuk menghasilkan tamatan yang mumpuni dan unggul melalui kurikulum pendidikan yang up to date dengan perkembangan teknologi saat ini.\n IST AKPRIND Yogayakarta membuka program kelas karyawan untuk memberi kesempatan luas kepada masyarakat yang tidak mempunyai waktu luang mengikuti kuliah di hari kerja. Keunggulan dari kelas karyawan diantaranya adalah sebagai berikut.\n 
    Kuliah Berkualitas dan Fleksibel\n
    Kuliah dengan sistem e-learning yang efektif dan inovatif didukung program LMS (Learning Management System), sehingga memungkinkan mahasiswa dapat kuliah sambil bekerja.\n
    Program Studi Prospektif\n
    Program studi unggulan dan prospektif dapat dipilih sesuai dengan minat dan kebutuhan calon mahasiswa.\n Dibekali dengan keterampilan di bidang rekayasa teknologi\n
    Biaya Kuliah Terjangkau\n
    SPP dapat dibayar bertahap. Dapatkan pula harga khusus bagi pendaftar (paket) untuk grup lembaga/perusahaan.", "Biaya Pendaftaran sebesar Rp300.000,-"],
        ];

        for ($index = 0; $index < count($programKuliah); $index++) {
            $data_program = [
                'kode_program' => 'PRG' . strval($index + 1),
                'nama_program' => $programKuliah[$index][0],
                'deskripsi_program' => $programKuliah[$index][1],
                'persyaratan' => $programKuliah[$index][2],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        DB::table('program_kuliah')->truncate();
        DB::table('program_kuliah')->insert($data_program);
    }
}
