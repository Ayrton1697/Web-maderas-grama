<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Pedido;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
    //    $products =  Product::factory()->count(5)->create();

        // Pedido::factory(3)->hasProducts(5,['qty'=> 5])->create();

        $pedido =Pedido::factory(3)->hasAttached(Product::factory(5),
        ['qty'=> 5,
        'totalPrice'=> 500]
         )->create();

        // DB::table('lineas_pedido')->insert([
        //     'pedido_id'=> Pedido::all()->random()->id,
        //     'product_id'=> Product::all()->random()->id,
        //     'qty'=> rand(1,30),
        //     'totalPrice'=> rand(1,30)
        // ]);
     
    }
}
