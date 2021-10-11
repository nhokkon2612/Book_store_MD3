<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'boss';
        $role->save();
        $role = new Role();
        $role->name = 'manager';
        $role->save();
        $role = new Role();
        $role->name = 'qtv';
        $role->save();

    }
}
