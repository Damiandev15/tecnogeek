<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create([
            "name" => "admin",
        ]);

        $role_editor = Role::create([
            "name" => "editor",
        ]);

        // PERMISSION CREATE
        $permission_create_role = Permission::Create([
            "name" => "create roles",
        ]);
        $permission_read_role = Permission::Create([
            "name" => "read roles",
        ]);
        $permission_update_role = Permission::Create([
            "name" => "update roles",
        ]);
        $permission_delete_role = Permission::Create([
            "name" => "delete roles",
        ]);

        // PERMISSION LESSON
        $permission_create_lesson = Permission::Create([
            "name" => "create lessons",
        ]);
        $permission_read_lesson = Permission::Create([
            "name" => "read lessons",
        ]);
        $permission_update_lesson = Permission::Create([
            "name" => "update lessons",
        ]);
        $permission_delete_lesson = Permission::Create([
            "name" => "delete lessons",
        ]);

        // CATEGORY PERMISSION
        $permission_create_category = Permission::Create([
            "name" => "create categories"
        ]);
        $permission_read_category = Permission::Create([
            "name" => "read categories"
        ]);
        $permission_update_category = Permission::Create([
            "name" => "update categories"
        ]);
        $permission_delete_category = Permission::Create([
            "name" => "delete categories"
        ]);


        $permissions_admin = [
            $permission_create_role,
            $permission_read_role,
            $permission_update_role,
            $permission_delete_role,
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_update_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category,
        ];

        $permissions_editor = [
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_update_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category,
        ];


        $role_admin->syncPermissions($permissions_admin);
        $role_editor->syncPermissions($permissions_editor);
    }
}
