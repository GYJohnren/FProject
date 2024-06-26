<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
   
}
