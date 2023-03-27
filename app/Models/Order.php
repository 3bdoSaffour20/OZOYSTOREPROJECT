<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'price',
        'quantity',
        'ordered',
        'shipped',
       ];
       public function product(){
        return $this->belongTo(Product::class, 'product_id', 'id');
       }
}
