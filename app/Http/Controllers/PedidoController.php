<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index(){
        $pedidos = Pedido::all();

        foreach($pedidos as $pedido){
            // foreach($pedido->products as $product){  
                echo ($pedido->user_name.' || '.$pedido->user_email.' || '.$pedido->user_address);
                echo '<br>';
                foreach($pedido->products as $product){
                    echo ($product->pivot->qty.' || '.$product->pivot->product_id);
                    echo ($product->name.' || '.$product->price);
                    echo '<br>';
                }
                echo '<br>';
                echo '<br>';
            //  }
        }
     
        // foreach($pedidos->products as $product){
        //     // dd($pedido->pivot->pedido_id);
        //     dd($product) ."<hr>";
        // }
  

        // return view('admin');
    }
}
