<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    
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
