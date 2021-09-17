<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Cajero', 'guard_name' => 'api']);
        $role = Role::create(['name' => 'Asesor', 'guard_name' => 'api']);
    }
}
