<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NativeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->agama();
        $this->pendTerakhir();
        $this->jumPenghasilan();
        $this->statusHubungan();
        $this->pekerjaan();
    }

    private function statusHubungan()
    {
        $hubungan = ['Kandung', 'Tiri', 'Angkat'];
        for ($index = 0; $index < count($hubungan); $index++) {
            $data_hub[$index] = [
                'kode_status' => 'HB' . strval($index + 1),
                'nama_hubungan' => $hubungan[$index],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('status_hubungan')->truncate();
        DB::table('status_hubungan')->insert($data_hub);
    }

    private function agama()
    {
        $agama = ['Islam', 'Kristen', 'Katolik', 'Budha', 'Hindu', 'Konghucu'];
        for ($index = 0; $index < count($agama); $index++) {
            $data_agama[$index] = [
                'kode_agama' => 'AG' . strval($index + 1),
                'nama_agama' => $agama[$index],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('agama')->truncate();
        DB::table('agama')->insert($data_agama);
    }

    private function pendTerakhir()
    {
        $pend = ['TK', 'SD/MI', 'SMP/MTS', 'SMA/MA/SMK', 'D1', 'D2', 'D3', 'D4', 'Strata-I (S1)', 'Strata-II (S2)', 'Doktor (S3)', 'Professor', 'Tidak Sekolah'];
        for ($index = 0; $index < count($pend); $index++) {
            $data_pend[$index] = [
                'kode_pendidikan' => 'P'. strval($index + 1),
                'nama_pendidikan' => $pend[$index],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('pendidikan_terakhir')->truncate();
        DB::table('pendidikan_terakhir')->insert($data_pend);
    }

    private function jumPenghasilan()
    {
        $jp = ['Dibawah 500.000', '500.000 s.d. 1juta', '1juta s.d. 3juta', '3juta s.d. 5juta', '5juta s.d. 10juta', '10juta s.d. 25juta', '25juta s.d. 50juta', '50juta s.d. 100juta', '100juta s.d. 1Milyar', 'Diatas 1Milyar'];
        for ($index = 0; $index < count($jp); $index++) {
            $data_jp[$index] = [
                'kode_penghasilan' => 'PHS' . strval($index + 1),
                'keterangan_penghasilan' => $jp[$index],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('jumlah_penghasilan')->truncate();
        DB::table('jumlah_penghasilan')->insert($data_jp);
    }

    private function pekerjaan()
    {
        $pekerjaan = [
            'PNS', 'TNI', 'Polisi',
            'Pegawai Swasta', 'Wirausaha', 'Wiraswasta', 'Dosen',
            'Dokter', 'Perawat', 'Pedagang', 'Pekerja Lepas',
            'Pilot', 'Pramugara/i', 'Masinis', 'Ojek Online', 'Rumah Tangga',
            'Pensiunan PNS', 'Pensiunan TNI', 'Pensiunan Polisi', 'Pejabat Negara'
        ];
        for ($index = 0; $index < count($pekerjaan); $index++) {
            $data_pekerjaan[$index] = [
                'kode_pekerjaan' => 'PKJ'.strval($index+1),
                'nama_pekerjaan' => $pekerjaan[$index],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        DB::table('pekerjaan')->truncate();
        DB::table('pekerjaan')->insert($data_pekerjaan);
    }

}
