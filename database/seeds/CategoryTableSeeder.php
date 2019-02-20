<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'name' => 'sepatu'
            ],
            [
                'name' => 'Tas'
            ],
            [
                'name' => 'Elektronik'
            ],
            [
                'name' => 'Kemeja'
            ],
            [
                'name' => 'Celana'
            ],
            [
                'name' => 'Buku'
            ],
            [
                'name' => 'Kosmetik'
            ],
            [
                'name' => 'Komputer'
            ],
            [
                'name' => 'Sandal'
            ],
            [
                'name' => 'Futniture'
            ],
        ];

        foreach ($rows as $row){
            Category::create($row);
        }
    }
}
