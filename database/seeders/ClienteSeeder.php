<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::insert([
            [
                'nombres' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'direccion' => 'Calle Álamo 123',
                'fono' => '987654321'
            ],
            [
                'nombres' => 'María García',
                'email' => 'maria.garcia@example.com',
                'direccion' => 'Av. Los Robles 742',
                'fono' => '987654322'
            ],
            [
                'nombres' => 'Carlos López',
                'email' => 'carlos.lopez@example.com',
                'direccion' => 'Calle Las Flores 456',
                'fono' => '987654323'
            ],
            [
                'nombres' => 'Ana Martínez',
                'email' => 'ana.martinez@example.com',
                'direccion' => 'Av. El Cerezo 789',
                'fono' => '987654324'
            ],
            [
                'nombres' => 'Luis Sánchez',
                'email' => 'luis.sanchez@example.com',
                'direccion' => 'Calle El Sauce 101',
                'fono' => '987654325'
            ],
            [
                'nombres' => 'Elena Rodríguez',
                'email' => 'elena.rodriguez@example.com',
                'direccion' => 'Av. Las Acacias 202',
                'fono' => '987654326'
            ],
            [
                'nombres' => 'Miguel Fernández',
                'email' => 'miguel.fernandez@example.com',
                'direccion' => 'Calle El Pino 303',
                'fono' => '987654327'
            ],
            [
                'nombres' => 'Laura Torres',
                'email' => 'laura.torres@example.com',
                'direccion' => 'Av. Los Castaños 404',
                'fono' => '987654328'
            ],
            [
                'nombres' => 'José Ramírez',
                'email' => 'jose.ramirez@example.com',
                'direccion' => 'Calle Los Olivos 505',
                'fono' => '987654329'
            ],
            [
                'nombres' => 'Lucía Herrera',
                'email' => 'lucia.herrera@example.com',
                'direccion' => 'Av. Los Cedros 606',
                'fono' => '987654330'
            ],
        ]);
    }
}
