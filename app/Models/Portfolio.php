<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function photos()
    {
        return $this->hasMany(PortfolioPhoto::class)->orderBy('item_order', 'asc');
    }
}
