<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Protected $fillable = [
        'id', 'title', 'description', 'status', 'user_id', 'created_at', 'updated_at'
    ];
}
