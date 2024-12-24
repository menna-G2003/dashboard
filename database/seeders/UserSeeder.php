<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
            ]);
    
            // إضافة مستخدم جديد
            User::create([
                'name' => 'mai',
                'email' => 'mai@gmail.com',
                'password' => Hash::make('2003'),
            ]);
            User::create([
                'name' => 'menna',
                'email' => 'menna@gmail.com',
                'password' => Hash::make('2004'),
            ]);
    }
}
