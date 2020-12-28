<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $items;
    public $totalQty=0;
    public $totalPrice=0;


// items[id]=[
//     id
//     price
//     qty
// ]
// foreach(item in items){
//     totalqt+= item->qty;
// }
// foreach(items as item){
//     totalPrice += item->qty*item->price;
// }


    public function add($item){

        $newItem=[
            'id'=>$item->id,
            'price'=> $item->price,
            'qty'=> 1
        ];

        $id= $item->id;

        if(array_key_exists($item->id, $this->items)){
         
            // $this->items[$id]->qty++;
            // $this->totalQty++;
            // $this->totalPrice+= $item->price;

        }else{
            // $this->items += $item;
            // $this->totalQty++;
            // $this->totalPrice+= $item->price;
        }

       
    }
    public function addWithQty($item, $qty){

  

       
    }
    
    public function remove($item){

            $id= $item->id;

            $this->totalQty-= $this->items[$id]->qty;
            unset($this->items[$id]);
            
            $this->totalPrice=0;

            foreach($this->items as $item){
                $this->totalPrice += $item->qty * $item->price;
            }
        
            
        
        
    }
}
