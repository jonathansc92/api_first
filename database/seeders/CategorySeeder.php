<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create(
            [                
                'id' => 1,
                'description' => 'Ficção'
            ]
        );
        Categories::create(
            [   
                'id' => 2,
                'description' => 'Biografias Negócios'
            ]
        );
        Categories::create(
            [
                'id' => 3,
                'description' => 'Ciência da Gestão Empresarial'
            ],
        );
        Categories::create(
            [
                'id' => 4,
                'description' => 'Investir'
            ],
        );
        Categories::create(
            [
                'id' => 5,
                'description' => 'Releitura'
            ],
        );
    }
}
