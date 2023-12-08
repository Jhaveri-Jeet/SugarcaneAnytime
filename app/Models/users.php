<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory,  Authenticatable;
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo(roles::class, 'roleId', 'id');
    }
}
