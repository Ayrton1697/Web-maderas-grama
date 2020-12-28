<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
 
    public function pedidos(){
        return $this->belongsToMany(Pedido::class,'lineas_pedido')
                                    ->withPivot('qty','totalPrice');
    }
}
