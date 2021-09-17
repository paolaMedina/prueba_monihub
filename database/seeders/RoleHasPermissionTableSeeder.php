<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asesor = Role::findByName('Cajero');
        $cajero = Role::findByName('Asesor');

        $asesor->givePermissionTo(['create_acount', 'view_acount']);
        $cajero->givePermissionTo(['edit_acount', 'view_acount']);
    }
}
