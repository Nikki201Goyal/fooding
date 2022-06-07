<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class steak extends Model
{
    use HasFactory;
    protected $fillable = ['image','title','price','status',];
}
