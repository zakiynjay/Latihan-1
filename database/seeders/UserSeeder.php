<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $arrayUser = [
            'nik' => '1234',
            'nama' => 'zakiy',
            'email' => 'abc@gmail.com',
            'password' => Hash::make('12345'),
        ];
        
        User::create($arrayUser);
    }
}
