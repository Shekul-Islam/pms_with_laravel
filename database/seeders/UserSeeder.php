<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // DB::table('users')->insert([
        //     'name' => "Md. Sakul Islam",
        //     'email' => "shekul.bd201@gmail.com",
        //     'password' => Hash::make('admin123'),
        // ]);
       $user = User::create([
            'name' => "Md. Sakul Islam",
            'email' => "shekul.bd201@gmail.com",
            'password' => Hash::make('admin123'),
        ]);
        $user->assignRole('super-admin');
    }
}
