<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(10)->create();

        //llamamos al factory sin crear seeder si queremos llenar una tabla con data simple
        //usaremos seeders si tenemos que llenarla con datos complejos relacionados
        Curso::factory(50)->create();
    }
}
