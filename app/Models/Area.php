<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Area extends Model     
{
    use HasFactory;

    public function stores() {
        return $this->hasMany(Store::class);
    }
}
