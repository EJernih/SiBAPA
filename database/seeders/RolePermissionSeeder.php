<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat role
        $teknisi = Role::firstorCreate(['name' => 'teknisi']);
        $kalab = Role::firstorCreate(['name' => 'kalab']);
        $kajur = Role::firstorCreate(['name' => 'kajur']);
        $logistik = Role::firstorCreate(['name' => 'logistik']);

        
        //buat izin
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'view-user']);
        
        Permission::create(['name' => 'create-bhp']);
        Permission::create(['name' => 'edit-bhp']);
        Permission::create(['name' => 'delete-bhp']);
        Permission::create(['name' => 'view-bhp']);

        Permission::create(['name' => 'create-unit']);
        Permission::create(['name' => 'edit-unit']);
        Permission::create(['name' => 'delete-unit']);
        Permission::create(['name' => 'view-unit']);

        Permission::create(['name' => 'create-prodi']);
        Permission::create(['name' => 'edit-prodi']);
        Permission::create(['name' => 'delete-prodi']);
        Permission::create(['name' => 'view-prodi']);

        Permission::create(['name' => 'create-lab']);
        Permission::create(['name' => 'edit-lab']);
        Permission::create(['name' => 'delete-lab']);
        Permission::create(['name' => 'view-lab']);

        //memberi permission kepada role
        $teknisi->givePermissionTo(['create-bhp', 'edit-bhp', 'delete-bhp', 'view-bhp']);
        $kalab->givePermissionTo(['view-bhp']);





    }
}
