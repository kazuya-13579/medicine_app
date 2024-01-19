<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Medicine;

class Category extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    public function medicines() 
    {
        return $this->hasMany(Medicine::class);
    }
    
    public function getCategory()
    {
        return $this->medicines()->with('category')->get();
    }
}
