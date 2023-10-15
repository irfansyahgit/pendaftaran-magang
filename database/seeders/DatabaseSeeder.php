<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('institutions')->insert([
            ['nama' => 'Pemerintah Kota Salatiga'],
            ['nama' => 'Walikota'],
            ['nama' => 'Wakil Walikota'],
            ['nama' => 'Staf Ahli Walikota'],
            ['nama' => 'Asisten Pemerintahan dan Kesejahteraan Rakyat'],
            ['nama' => 'Bagian Pemerintahan'],
            ['nama' => 'Bagian Kesejahteraan Rakyat'],
            ['nama' => 'Bagian Hukum'],
            ['nama' => 'Asisten Perekonomian dan Pembangunan'],
            ['nama' => 'Bagian Perekonomian'],
            ['nama' => 'Bagian Pembangunan'],
            ['nama' => 'Bagian Hubungan Masyarakat dan Protokol'],
            ['nama' => 'Asisten Administrasi Umum'],
            ['nama' => 'Bagian Organisasi dan Kepegawaian'],
            ['nama' => 'Bagian Umum'],
            ['nama' => 'Bagian Keuangan'],
            ['nama' => 'Sekretariat Dewan Perwakilan Rakyat Daerah'],
            ['nama' => 'Inspektorat'],
            ['nama' => 'Dinas Pendidikan'],
            ['nama' => 'Dinas Kesehatan'],
            ['nama' => 'Dinas Sosial'],
            ['nama' => 'Satuan Polisi Pamong Praja'],
            ['nama' => 'Dinas Perumahan dan Kawasan Permukiman'],
            ['nama' => 'Dinas Lingkungan Hidup'],
            ['nama' => 'Dinas Kependudukan dan Pencatatan Sipil'],
            ['nama' => 'Dinas Pemberdayaan Perempuan dan Pelindungan Anak'],
            ['nama' => 'Dinas Perpustakaan dan Kearsipan'],
            ['nama' => 'Dinas Kepemudaan dan Olahraga'],
            ['nama' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu  Pintu'],
            ['nama' => 'Dinas Komunikasi dan Informatika'],
            ['nama' => 'Dinas Perdagangan'],
            ['nama' => 'Dinas Pekerjaan Umum dan Penataan Ruang'],
            ['nama' => 'Dinas Pangan'],
            ['nama' => 'Dinas Koperasi, Usaha Kecil, dan Menengah'],
            ['nama' => 'Dinas Kebudayaan dan Pariwisata'],
            ['nama' => 'Dinas Pengendalian Penduduk dan Keluarga Berencana'],
            ['nama' => 'Dinas Perhubungan'],
            ['nama' => 'Dinas Perindustrian dan Tenaga Kerja'],
            ['nama' => 'Dinas Pertanian'],
            ['nama' => 'Badan Keuangan Daerah'],
            ['nama' => 'Badan Perencanaan, Penelitian dan Pengembangan Daerah'],
            ['nama' => 'Badan Kepegawaian, Pendidikan dan Pelatihan Daerah'],
            ['nama' => 'Badan Kesatuan Bangsa dan Politik'],
            ['nama' => 'Rumah Sakit Umum Daerah'],
            ['nama' => 'Kecamatan Argomulyo'],
            ['nama' => 'Kelurahan Cebongan'],
            ['nama' => 'Kelurahan Kumpulrejo'],
            ['nama' => 'Kelurahan Ledok'],
            ['nama' => 'Kelurahan Noborejo'],
            ['nama' => 'Kelurahan Randuacir'],
            ['nama' => 'Kelurahan Tegalrejo'],
            ['nama' => 'Kecamatan Sidomukti'],
            ['nama' => 'Kelurahan Dukuh'],
            ['nama' => 'Kelurahan Kalicacing'],
            ['nama' => 'Kelurahan Kecandran'],
            ['nama' => 'Kelurahan Mangunsari'],
            ['nama' => 'Kecamatan Sidorejo'],
            ['nama' => 'Kelurahan Blotongan'],
            ['nama' => 'Kelurahan Bugel'],
            ['nama' => 'Kelurahan Bugel'],
            ['nama' => 'Kelurahan Kauman Kidul'],
            ['nama' => 'Kelurahan Pulutan'],
            ['nama' => 'Kelurahan Salatiga'],
            ['nama' => 'Kelurahan Sidorejo Lor'],
            ['nama' => 'Kecamatan Tingkir'],
            ['nama' => 'Kelurahan Gendongan'],
            ['nama' => 'Kelurahan Kalibening'],
            ['nama' => 'Kelurahan Kutowinangun Lor'],
            ['nama' => 'Kelurahan Kutowinangun Kidul'],
            ['nama' => 'Kelurahan Sidorejo Kidul'],
            ['nama' => 'Kelurahan Tingkir Lor'],
            ['nama' => 'Kelurahan Tingkir Tengah'],
            
        ]);

        DB::table('stats')->insert([
            ['nama' => 'Permohonan'],
            ['nama' => 'Diproses'],
            ['nama' => 'Ditolak'],
            ['nama' => 'Diterima'],
        ]);
    }
}
