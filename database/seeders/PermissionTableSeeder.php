<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'create_acount', 'guard_name' => 'api']);
        Permission::create(['name' => 'edit_acount', 'guard_name' => 'api']);
        Permission::create(['name' => 'view_acount', 'guard_name' => 'api']);
    }
}
