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
            'produto_id' => '2',

            ]);
    }
}
