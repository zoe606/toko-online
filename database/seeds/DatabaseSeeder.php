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
        /*
            *Melakukan seeding ke db tanpa harus memilih satu satu seedernya
            *cukup tambahkan seeder di bawah
            *lalu jalankan perintah
            !php artisan db:seed
        */
        // $this->call(UsersTableSeeder::class);
        // $this->call(ProductTableSeeder::class);
        $this->call(CategoryTableSeeder::class);

    }
}
