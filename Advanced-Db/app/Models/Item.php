<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'quantity', 'cost', 'sell_price'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
