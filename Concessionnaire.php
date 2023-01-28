<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concessionnaire extends Model
{
    use HasFactory;
    protected $fillable = ['brand', 'model', 'horspower', 'number_place', 'color', 'picture'];      
}
