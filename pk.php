<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pk extends Model
{
    protected $table = 'pk';

    public function processor()
    {
        return $this->belongsToMany(yslugi::class);
    }

    public function videocards()
    {
        return $this->belongsToMany(videocardss::class);
    }

}
