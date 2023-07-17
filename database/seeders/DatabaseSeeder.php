<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin')
        ]);

        \App\Models\Resi::create([
            'user_id' => 1,
            'pelanggan_id' => 1,
            'berat_pakaian' => 5,
            'total' => 10000
        ]);

        \App\Models\Pelanggan::create([
            'user_id' => 1,
            'nama' => 'Andika',
            'no_hp' => '082222222222',
            'alamat' => 'Jl. Kebun'
        ]);
    }
}
