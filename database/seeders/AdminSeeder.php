<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'isAdmin' => true
            ]
        );
        foreach ($data as $d) {
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'password' => $d['password'],
                'isAdmin' => $d['isAdmin']
            ]);
        }
    }
}
