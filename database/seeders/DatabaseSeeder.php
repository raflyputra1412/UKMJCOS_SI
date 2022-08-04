<?php

namespace Database\Seeders;

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

        // //buat nim random
        // $nimLength = 9;
        // $characters = "0123456789";
        // $randomNim = "";

        // for ($i=0; $i < $nimLength; $i++) { 
        //     $index = rand(0, strlen($characters));
        //     $randomNim .= $characters[$index];
        // }
        // // selesai nim

        // $prodi_arr = array(
        //     "S1-Sistem Komputer",
        //     "S1-Sistem Informasi",
        //     "S1-Teknologi Informasi",
        //     "S1-Bisnis Digital",
        //     "D3-Manajemen Informatika",
        // );

        // $angkatan_arr = array(
        //     "2017",
        //     "2018",
        //     "2019",
        //     "2020",
        //     "2021",
        //     "2022",
        // );

        // $jabatan_arr = array(
        //     "Pengurus",
        //     "Anggota",
        // );

        // $faker = Faker::create('id_ID');
        
        // for($i=1; $i < 10; $i++){
        // DB::table('users')->insert([
        //         'nim' => $randomNim,
        //         'nama_lengkap' => $faker->name,
        //         'program_studi' => array_rand($prodi_arr),
        //         'angkatan' => array_rand($angkatan_arr),
        //         'jabatan' => array_rand($jabatan_arr),
        //         'no_hp' => $faker->phoneNumber,
        //         'email' => $faker->email,
        //         'alamat' => $faker->address,
        //         'password' => bcrypt('12345'),
        //     ]);
        // }

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

        Inventaris::create([
            'nama_barang' => 'Costume cosplay maskot JCOS',
            'harga' => '1.200.000',
            'sumber_dana' => 'Uang Kas',
            'jumlah_barang' => '2 pasang',
            'kepemilikan' => 'JCOS',
            'pemegang' => 'bendahara',
            'tgl_input' => Carbon::parse('8/5/2020'),
        ]);

        Events::create([
            'nama_event' => 'Japanese Festival',
            'tanggal' => Carbon::parse('01/07/2022'),
            'waktu' => '10:00 WITA',
            'ketua_event' => 'Fauzi Safaringga',
            'roles_panitia' => json_encode(["sekretaris", "bendahara"," konsumroh"], true),
        ]);

        // User::create([
        //     'nim' => '170010010',
        //     'nama_lengkap' => 'Random name',
        //     'program_studi' => 'Sistem Informasi',
        //     'angkatan' => '2018',
        //     'jabatan' => 'anggota',
        //     'no_hp' => '089687679663',
        //     'email' => 'random@gmail.com',
        //     'alamat' => 'jl diponogoro nomor 110',
        //     'password' => bcrypt('12345'),
        // ]);

        // $user = [
        //     [
        //        'username' => 'admin',
        //        'name'=>'ini akun Admin',
        //        'email'=>'admin@example.com',
        //         'level'=>'admin',
        //        'password'=> bcrypt('123456'),
        //     ],
        //     [
        //         'username' => 'user',
        //        'name'=>'ini akun User (non admin)',
        //        'email'=>'user@example.com',
        //         'level'=>'editor',
        //        'password'=> bcrypt('123456'),
        //     ],
        // ];

        // foreach ($user as $key => $value) {
        //     User::create($value);
        // }
    }
}
