<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'end_at', 'qty', 'discount', 'restaurant',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
