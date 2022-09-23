<?php

namespace Database\Seeders;

use App\Models\Content;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        for ($i=0; $i < 10; $i++){
            Content::create([
                'judul' => $faker->sentence(mt_rand(2,8)),
                'ringkasan' => $faker->paragraph(),
                'deskripsi' => collect($faker->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>")->implode(''),
                'gambar'=>'https://picsum.photos/320/200',
                'user_id' => mt_rand(1, 4),
                'jenis_content_id' => mt_rand(1, 6)
            ]);
        }
    }
}
