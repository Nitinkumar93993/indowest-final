<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialData extends Model
{
    use HasFactory;
    protected $table = 'testimonial_data';
    protected $primaryKey = 'id';
    protected  $testimonial_img = ['testimonial_name', 'testimonial_category', 'testimonial_image', 'testimonial_content'];
}
 