<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'title', 'description', 'address_id', 'user_id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function promoCodes()
    {
        return $this->hasMany(PromoCode::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class, 'belongs_to', 'id');
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }

    public function followedBy()
    {
        return $this->belongsToMany(User::class);
    }
}
