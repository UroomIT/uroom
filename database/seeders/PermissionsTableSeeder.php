<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
           
            // Utilisateurs web
            [
                'name' => 'user.view',
                'label'=> 'See User menu'
            ],
            [
                'name' => 'user.create',
                'label'=> 'create user'
            ],
            [
                'name' => 'user.edit',
                'label'=> 'Edit User'
            ],
            [
                'name' => 'user.delete',
                'label'=> 'Delete User'
            ],
            // Access To roles
            [
                'name' => 'role.view',
                'label'=> 'See Roles'
            ],
            [
                'name' => 'role.create',
                'label'=> 'Add Role'
            ],
            [
                'name' => 'role.edit',
                'label'=> 'Edit Role'
            ],
            [
                'name' => 'role.delete',
                'label'=> 'Delete Role'
            ],
            // Room
            [
                'name' => 'room.view',
                'label'=> 'See Room Menu'
            ],
            [
                'name' => 'room.create',
                'label'=> 'Create Room'
            ],
            [
                'name' => 'room.show',
                'label'=> 'See Room details'
            ],
            [
                'name' => 'room.edit',
                'label'=> 'Edit Room'
            ],
            [
                'name' => 'room.delete',
                'label'=> 'Delete Room'
            ],
            // Students
            [
                'name' => 'student.view',
                'label'=> 'See Student Menu'
            ],
            [
                'name' => 'student.create',
                'label'=> 'Create student'
            ],
            [
                'name' => 'student.edit',
                'label'=> 'Edit un vehicule'
            ],
            [
                'name' => 'student.delete',
                'label'=> 'Delete un vehicule'
            ],
            [
                'name' => 'configuration_base.view',
                'label'=> 'View Menu Configuration'
            ],
             // Room Type
            [
                'name' => 'type_room.view',
                'label'=> 'View Menu Room Type'
            ],
            [
                'name' => 'type_room.create',
                'label'=> 'creer une marque'
            ],
            [
                'name' => 'type_room.edit',
                'label'=> 'Edit a room type'
            ],
            [
                'name' => 'type_room.delete',
                'label'=> 'Delete a room type'
            ],


            // Complains
            [
                'name' => 'complains.view',
                'label'=> 'see the menu complain'
            ],
            [
                'name' => 'complains.create',
                'label'=> 'create new complain'
            ],
            [
                'name' => 'complains.edit',
                'label'=> 'edit complain'
            ],
            [
                'name' => 'complains.delete',
                'label'=> 'delete complain'
            ],

             // Parters
             [
                'name' => 'partners.view',
                'label'=> 'View Menu Partners'
            ],
            [
                'name' => 'partners.create',
                'label'=> 'create partner'
            ],
            [
                'name' => 'partners.edit',
                'label'=> 'Edit a partner'
            ],
            [
                'name' => 'partners.delete',
                'label'=> 'Delete a partner'
            ],

            
            // university
            [
                'name' => 'university.create',
                'label'=> 'create new university'
            ],
            [
                'name' => 'university.edit',
                'label'=> 'edit university'
            ],
            [
                'name' => 'university.delete',
                'label'=> 'delete univerity'
            ],

            // website configuration
            [
                'name' => 'website_config.view',
                'label'=> 'see the menu website configuration'
            ],
        
        ];
        
        $insert_data = [];
        $time_stamp = Carbon::now()->toDateTimeString();
        foreach ($data as $d) {
            $d['guard_name'] = 'web';
            $d['created_at'] = $time_stamp;
            $insert_data[] = $d;

        }
        Permission::insert($insert_data);
        $role = Role::create(['name' => 'Administrator']);
        foreach (Permission::all() as $permission) {
            $role->givePermissionTo($permission);
        }
    }
}
