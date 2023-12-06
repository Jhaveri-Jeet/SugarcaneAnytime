<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\users;

class orders extends Model
{
    public function user()
    {
        return $this->belongsTo(users::class, 'userId', 'id');
    }

    public function product()
    {
        return $this->belongsTo(products::class, 'productId', 'id');
    }
}
