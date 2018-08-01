<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create(array(
            'nome' => 'Admin',
            'email' => 'admin@cms.com',
            'senha' => bcrypt('admin'),
        ));

        $usuario->assignRole(array('admin'));
    }
}
