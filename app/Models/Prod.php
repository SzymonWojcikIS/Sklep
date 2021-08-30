<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    use HasFactory;

    protected $table="prods";

    public function cate()
    {
        return $this->belongsTo(Cate::class,'cate_id');
    }
}
