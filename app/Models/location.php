<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable = ['city', 'lat','lng'];
    protected $hidden = ['created_at', 'updated_at'];
}
