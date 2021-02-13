<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Model\Review;

class Product extends Model
{
    use HasFactory;

    public function reviews () {
        return $this->hasMany(Review::class);
    }
}
