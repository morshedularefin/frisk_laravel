<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioPhoto extends Model
{
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
