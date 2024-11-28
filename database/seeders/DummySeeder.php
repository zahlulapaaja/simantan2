<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 498; $i++) {
            User::create([
                'name'  => 'user ke-' . $i,
                'email'  => 'user' . $i . '@dummy.com',
                'password'  => Hash::make('user123'),
            ]);
        }
    }
}
