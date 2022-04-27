<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'Admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('admin'),
            ])->save();
        }
        $role = Role::firstOrNew(['name' => 'Professional']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('professional'),
            ])->save();
        }
        $role = Role::firstOrNew(['name' => 'Normal']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('normal'),
            ])->save();
        }
    }
}
