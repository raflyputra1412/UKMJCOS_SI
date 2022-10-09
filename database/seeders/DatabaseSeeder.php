<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Events;
use App\Models\Inventaris;
use App\Models\User;
use App\Models\JadwalKegiatan;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        JadwalKegiatan::create([
            'tanggal' =>  Carbon::parse('01/06/2022'),
            'waktu' => '14:00 WITA',
            'tempat' => 'Kampus ITB Stikom Bali',
            'acara' => 'Perkenalan anggota baru',
        ]);

        User::create([
            'nim' => '170010009',
            'nama_lengkap' => 'Muhammad Rafly Hersa Putra',
            'program_studi' => 'S1-Sistem Komputer',
            'angkatan' => '2017',
            'jabatan' => 'Pengurus',
            'no_hp' => '089687679663',
            'email' => 'raflyputra68@gmail.com',
            'alamat' => 'pemogan perum parerepan no 3A',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'nim' => '208917311',
            'nama_lengkap' => 'Faela Putri',
            'program_studi' => 'S1-Sistem Informasi',
            'angkatan' => '2020',
            'jabatan' => 'Anggota',
            'no_hp' => '081543537883',
            'email' => 'faela@gmail.com',
            'alamat' => 'Jl Diponegoro',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'nim' => '172020801',
            'nama_lengkap' => 'Ananda Pamungkas',
            'program_studi' => 'S1-Sistem Komputer',
            'angkatan' => '2017',
            'jabatan' => 'Pengurus',
            'no_hp' => '087678651123',
            'email' => 'ananda@gmail.com',
            'alamat' => 'Batu Bulan',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'nim' => '181089012',
            'nama_lengkap' => 'Faisal Nuddin',
            'program_studi' => 'S1-Sistem Informasi',
            'angkatan' => '2018',
            'jabatan' => 'Anggota',
            'no_hp' => '085687654112',
            'email' => 'faisal@gmail.com',
            'alamat' => 'Renon',
            'password' => bcrypt('12345'),
        ]);


        Inventaris::create([
            'nama_barang' => 'Costume cosplay maskot JCOS',
            'harga' => '1.200.000',
            'sumber_dana' => 'Uang Kas',
            'jumlah_barang' => '2 pasang',
            'kepemilikan' => 'JCOS',
            'pemegang' => 'bendahara',
            'tgl_input' => Carbon::parse('8/5/2020'),
        ]);

        // Events::create([
        //     'nama_event' => 'Japanese Festival',
        //     'tanggal' => Carbon::parse('01/07/2022'),
        //     'waktu' => '10:00 WITA',
        //     'ketua_event' => 'Fauzi Safaringga',
        //     'roles_panitia' => json_encode(["sekretaris", "bendahara"," konsumroh"], true),
        // ]);

    }
}
