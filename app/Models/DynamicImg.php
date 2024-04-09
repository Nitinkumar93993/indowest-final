<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicImg extends Model
{
    use HasFactory;
    protected $table = "dynamic_image";
    protected $primaryKey = "id";
    protected $fillable = [
        'image_title', 'web_category', 'image',
    ];
}
