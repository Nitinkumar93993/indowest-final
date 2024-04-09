<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = "course";
    protected $primaryKey = "course_id";
    protected $fillable = ['course_name', 'course_desc', 'course_icon','course_image','course_heading_image', 'course_heading', 'course_describe', 'first_heading', 'first_paragraph', 'second_heading', 'second_paragraph', 'third_heading', 'third_paragraph', 'fourth_heading', 'fourth_paragraph', 'fifth_heading', 'fifth_paragraph', 'sixth_heading', 'sixth_paragraph', 'seventh_heading', 'seventh_paragraph', 'eight_heading', 'eight_paragraph', 'ninth_heading', 'ninth_paragraph', 'tenth_heading', 'tenth_paragraph'];
}