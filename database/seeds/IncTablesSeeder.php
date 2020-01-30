<?php

use Illuminate\Database\Seeder;
use App\Models\Empresa;
use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Endereco;
use App\Models\Cliente;
use App\Models\Divida;

class IncTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // define faker
        $faker = \Faker\Factory::create();
        
        // run Empresas
        Empresa::create([
            'empresa' => 'NuBank',
        ]);
        Empresa::create([
            'empresa' => 'Bradesco',
        ]);
        Empresa::create([
            'empresa' => 'Casas Bahia',
        ]);

        // run Estados
        Estado::create([
            'estado' => 'Santa Catarina',
            'uf' => 'SC',
        ]); 
        Estado::create([
            'estado' => 'São Paulo',
            'uf' => 'SP',
        ]); 

        // run Cidades
        Cidade::create([
            'cidade' => 'Blumenau',
            'estado' => 1,
        ]); 
        Cidade::create([
            'cidade' => 'Itajaí',
            'estado' => 1,
        ]); 
        Cidade::create([
            'cidade' => 'Santos',
            'estado' => 2,
        ]);

        // run Cidades
        Endereco::create([
            'rua' => $faker->streetName,
            'logradouro' => $faker->buildingNumber,
            'cidade' => 1,
        ]);
        Endereco::create([
            'rua' => $faker->streetName,
            'logradouro' => $faker->buildingNumber,
            'cidade' => 2,
        ]);
        Endereco::create([
            'rua' => $faker->streetName,
            'logradouro' => $faker->buildingNumber,
            'cidade' => 3,
        ]);

        // run Clientes
        Cliente::create([
            'cpf' => '11122233355',
            'nome' => $faker->name,
            'endereco' => 1,
        ]);
        Cliente::create([
            'cpf' => '14568725937',
            'nome' => $faker->name,
            'endereco' => 2,
        ]);
        Cliente::create([
            'cpf' => '65748632579',
            'nome' => $faker->name,
            'endereco' => 3,
        ]);

        // run Dividas
    	Divida::create([
            'cliente' => 1,
            'empresa' => 1,
            'divida' => 1832.50,
        ]);
    	Divida::create([
            'cliente' => 1,
            'empresa' => 2,
            'divida' => 235,
        ]);
    	Divida::create([
            'cliente' => 2,
            'empresa' => 1,
            'divida' => 158.90,
        ]);
    	Divida::create([
            'cliente' => 3,
            'empresa' => 3,
            'divida' => 1058.60,
        ]);
    }
}
