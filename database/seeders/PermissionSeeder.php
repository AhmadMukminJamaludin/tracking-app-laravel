<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $customerservice = Role::create(['name' => 'customerservice', 'guard_name' => 'web']);
        $kabaganalis = Role::create(['name' => 'kabaganalis', 'guard_name' => 'web']);
        $petugasslik = Role::create(['name' => 'petugasslik', 'guard_name' => 'web']);
        $direktur = Role::create(['name' => 'direktur', 'guard_name' => 'web']);
        $staffanalis = Role::create(['name' => 'staffanalis', 'guard_name' => 'web']);
        $nasabah = Role::create(['name' => 'nasabah', 'guard_name' => 'web']);

        $permissions = [

            ['id' => 1, 'name' => 'edit-profile',],

            ['id' => 2, 'name' => 'kode-berkas-list',],
            ['id' => 3, 'name' => 'kode-berkas-create',],
            ['id' => 4, 'name' => 'kode-berkas-edit',],
            ['id' => 5, 'name' => 'kode-berkas-delete',],

            ['id' => 6, 'name' => 'pengajuan-kredit-list',],
            ['id' => 7, 'name' => 'pengajuan-kredit-create',],
            ['id' => 8, 'name' => 'pengajuan-kredit-edit',],
            ['id' => 9, 'name' => 'pengajuan-kredit-delete',],
            ['id' => 10, 'name' => 'pengajuan-kredit-verifikasi'],
            ['id' => 11, 'name' => 'pengajuan-kredit-qrcode'],
            ['id' => 12, 'name' => 'pengajuan-kredit-progress'],
            ['id' => 13, 'name' => 'pengajuan-kredit-show'],

            ['id' => 14, 'name' => 'manajemen-pengguna-list',],
            ['id' => 15, 'name' => 'manajemen-pengguna-create',],
            ['id' => 16, 'name' => 'manajemen-pengguna-edit',],
            ['id' => 17, 'name' => 'manajemen-pengguna-delete',],
        ];

        foreach ($permissions as $item) {
            Permission::create($item);
        }

        $customerservice_permissions = [1, 2, 4, 6, 7, 8, 9, 10, 11];
        $kabaganalis_permissions = [1, 2, 6, 10, 13];
        $petugasslik_permissions = [1, 2, 6, 10, 13];
        $staffanalis_permissions = [1, 2, 6, 10, 13];
        $direktur_permissions = [1, 12, 13];
        $nasabah_permissions = [1, 7];

        $customerservice->syncPermissions($customerservice_permissions);
        $kabaganalis->syncPermissions($kabaganalis_permissions);
        $staffanalis->syncPermissions($staffanalis_permissions);
        $nasabah->syncPermissions($nasabah_permissions);
        $petugasslik->syncPermissions($petugasslik_permissions);
        $direktur->syncPermissions($direktur_permissions);
        $nasabah->syncPermissions($nasabah_permissions);
        $admin->syncPermissions(Permission::all());
    }
}
