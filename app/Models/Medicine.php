<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use HasFactory;
    // use SoftDeletes;
    
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'maker',
        'price',
        'discription',
        'jancode',
        'has_stock',
        // 'updated_at',
        // 'created_at',
    ];
}
