<?php

namespace Database\Seeders;

use App\Models\PedidoProduto;

use Illuminate\Database\Seeder;

class PedidoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PedidoProduto::create([
        'produto_id' => '1',
        'pedido_id'  => '1',
        'quantidade' => '2',
        'valor'      => '9.90',
            ]);
           
        PedidoProduto::create([
        'produto_id' => '2',
        'pedido_id'  => '1',
        'quantidade' => '3',
        'valor'      => '5.90',
                ]);   

        PedidoProduto::create([
        'produto_id' => '4',
        'pedido_id'  => '1',
        'quantidade' => '1',
        'valor'      => '15.90',
                    ]);  
                    
        PedidoProduto::create([
        'produto_id' => '2',
        'pedido_id'  => '2',
        'quantidade' => '2',
        'valor'      => '11.90',
                        ]);

                        


    }
}