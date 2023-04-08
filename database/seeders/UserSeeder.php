<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        
        User::create([
            'name' => 'islam ess',
            'email' => 'islam@ess.com',
            'password' => Hash::make('1111'),
        ]);

        User::create([
            'name' => 'manal ess',
            'email' => 'manal@ess.com',
            'password' => Hash::make('1111'),
        ]);

        User::create([
            'name' => 'kaoutar ess',
            'email' => 'kaoutar@ess.com',
            'password' => Hash::make('1111'),
        ]);
    }
}
