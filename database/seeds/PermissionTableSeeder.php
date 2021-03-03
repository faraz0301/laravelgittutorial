<?php

use Illuminate\Database\Seeder;

use Spatie\Permissions\Models\Permissions;

//use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',

        ];

        foreach ($permissions as $permission){
            $permission::create(['name' => $permission]);


        }
    }
}
