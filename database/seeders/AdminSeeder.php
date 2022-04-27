<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('display_name', 'admin')->firstOrFail();

            User::create([
                'name' => 'Admin',
                'username' =>'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'remember_token' => \Illuminate\Support\Str::random(60),
                'role_id' => $role->id,
                'phone' => 000_000_000,
            ]);
        }
    }
}
