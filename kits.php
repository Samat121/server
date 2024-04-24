<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kits extends Model
{

    protected $table = 'kits';

    public function pk()
    {
        return $this->belongsToMany(pk::class);
    }
}
