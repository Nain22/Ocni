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
        // Insertando Roles
        factory(\App\Role::class, 1)->create(['nombre' => 'admin']);
        factory(\App\Role::class, 1)->create(['nombre' => 'postulante']);

        // Insertando Idiomas
        factory(\App\Idioma::class, 1)->create(['nombre' => 'Español']);
        factory(\App\Idioma::class, 1)->create(['nombre' => 'Ingles']);
        factory(\App\Idioma::class, 1)->create(['nombre' => 'Portuges']);
        factory(\App\Idioma::class, 1)->create(['nombre' => 'Chino']);
    }
}
