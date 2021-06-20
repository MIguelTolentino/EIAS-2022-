<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "Brands";

    protected $fillable = [
        'name',
    ];
    public function items(){
        return $this->hasMany('App\Models\Item');
    }
}