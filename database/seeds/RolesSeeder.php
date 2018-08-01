<?php

use Illuminate\Database\Seeder;
use Kodeine\Acl\Models\Eloquent\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(array(
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Usuário administrador do sitema. Acesso total aosn recursos'
        ));

        Role::create(array(
            'name' => 'Assinante',
            'slug' => 'assinante',
            'description' => 'Usuário cliente'
        ));
    }
}
