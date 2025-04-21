<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

//use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Cliente::create([
            'nome' => 'João Silva',
            'email' => 'joao@email.com',
            'altura' => 1.75,
            'peso' => 70.5
        ]);

        Cliente::create([
            'nome' => 'Maria Oliveira',
            'email' => 'maria@email.com',
            'altura' => 1.62,
            'peso' => 60.2
        ]);

        Cliente::create([
            'nome' => 'Carlos Souza',
            'email' => 'carlos@email.com',
            'altura' => 1.85,
            'peso' => 82.0
        ]);
    }
}
