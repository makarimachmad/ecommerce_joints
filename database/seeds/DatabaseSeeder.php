<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $faker = Faker\Factory::create(); //import library faker

        $limit = 20; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('menu')->insert([ //mengisi datadi database
                'kategori' => $faker->kategori,
                'nama' => $faker->nama, //email unique sehingga tidak ada yang sama
                'deskripsi' => $faker->deskripsi,
                'harga' => $faker->harga,
                'gambar' => $faker->gambar
            ]);
        }
    }
}
