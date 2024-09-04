<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role = Role::where('name', 'Administrator')->first();
        $user = User::create([
            'first_name'=>'Administrator',
            'last_name'=>'Uroom',
            'gender'=>'M',
            'Email'=>'uroom@gmail.com',
            'password'=>bcrypt('uroom2024'),
            'Photo'=> '',
            'State'=>1,
            'phone' => '',
            'role_id'=> $role->id,
            'room_id' => null
        ]);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
