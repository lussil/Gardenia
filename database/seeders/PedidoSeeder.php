<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;


class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::create([
            
            'nome'                    => 'lucas' ,
            'telefone'                => '21969934621',
            'observacao'              => 'sem mostard',
            'status'                  => '1',
            'rua'                     => 'rua de baixo',
            'numero'                  => '00',
            'bairro'                  => 'jacarepagua',
            'complemento_observacao'  => 'subindo a rua casa 12',
            'CEP'                     => '22222222',
        ]);

        Pedido::create([
            
            'nome'                    => 'João' ,
            'telefone'                => '21996699669',
            'observacao'              => 'com mostard',
            'status'                  => '1',
            'rua'                     => 'rua de cima',
            'numero'                  => '12',
            'bairro'                  => 'crocodilopagua',
            'complemento_observacao'  => 'descendo a rua na casa 21',
            'CEP'                     => '44444444',
        ]);
    }
}
