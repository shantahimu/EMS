<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'Shanta Islam',
            'role'=>'admin',
            'phone'=>'01303764947',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'image'=>'Admin_photo.jpg',
        ]);
    }
}