<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TareaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        \App\Models\Tarea::factory(10)->create();
        //\App\Models\Tarea::factory()->times(10)->create();
=======
        \App\Models\TareaModel::factory(10)->create();
        \App\Models\TareaModel::factory()->times(10)->create();
>>>>>>> a6ee41003971d12ed5fc2a825c4dbaf7c882239f
    }
}
