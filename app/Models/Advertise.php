<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    use HasFactory;
    protected  $fillable = [
        'AdTitle',
        'AdContent',
        'product_id',
        'category_id',
        'subscriber_id',
        'subarchive',
        ];
        public function Product(){
            return $this->belongsTo(Product::class , 'product_id', 'id');
    
        }
         public function Category(){
            return $this->belongsTo(Category::class , 'Category_id', 'id');
            
        }
          public function Subscriber(){
            return $this->belongsTo(User::class , 'subscriber_id', 'id');
            
        }
}
