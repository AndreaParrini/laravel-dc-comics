<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    public $fillable = ['title', 'description', 'thumb', 'price', 'sale_date', 'type', 'series', 'updated_at', 'created_at'];
}
