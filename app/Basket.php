<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    Protected $fillable = [
     'id','product_id','user_id','address','status','phone','description','created_at','updated_at'
    ];
}
