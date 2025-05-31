<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat role
        $teknisi = Role::create(['name' => 'teknisi']);
        $kalab = Role::create(['name' => 'kalab']);
        $kajur = Role::create(['name' => 'kajur']);
        $logistik = Role::create(['name' => 'logistik']);

        
        //buat izin
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'delete-role']);





    }
}
