<?php

namespace Database\Seeders;

use App\Models\Authors;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authors::create(
            [                
                'id' => 1,
                'name' => 'Edward Powys Mathers'
            ]
        );
        Authors::create(
            [   
                'id' => 2,
                'name' => 'Luiz Barsi Filho'
            ]
        );
        Authors::create(
            [
                'id' => 3,
                'name' => ' Robert E. Howard'
            ],
        );
    }
}
