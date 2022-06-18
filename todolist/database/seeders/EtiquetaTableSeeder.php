<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EtiquetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        \App\Models\Etiqueta::factory(10)->create();
        //\App\Models\Etiqueta::factory()->times(10)->create();
=======
        \App\Models\EtiquetaModel::factory(10)->create();
        \App\Models\EtiquetaModel::factory()->times(10)->create();
>>>>>>> a6ee41003971d12ed5fc2a825c4dbaf7c882239f
    }
}
