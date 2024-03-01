<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::Create([
            "name" => "admin",
            "email" => "admin@tecnogeek.com",
            "password" => Hash::make("admin"),
        ]);
        $admin->assignRole('admin'); // Corrected

        $editor = User::Create([
            "name" => "editor",
            "email" => "editor@tecnogeek.com",
            "password" => Hash::make("editor"),
        ]);
        $editor->assignRole('editor'); // Corrected
    }
}
