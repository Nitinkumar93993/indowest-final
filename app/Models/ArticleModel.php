<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    use HasFactory;
    protected $table = "article";
    protected $primaryKey = "id";

    protected $fillable = [
        'blog_title',
        'blog_desc',
        'blog_italic',
        'first_paragraph',
        'second_paragraph',
        'third_paragraph',
        'fourth_paragraph',
        'fifth_paragraph',
        'sixth_paragraph',
        'seventh_paragraph',
        'eighth_paragraph',
        'ninth_paragraph',
        'tenth_paragraph',
        'eleventh_paragraph',
        'twelveth_paragraph',
        'thirteen_paragraph',
        'fourteen_paragraph',
        'fifteen_paragraph',
        'sixteen_paragraph',
        'seventeen_paragraph',
        'eighteen_paragraph',
        'nineteen_paragraph',
        'twenteen_paragraph',
        'first_images',
        'second_images',
        'images',
    ];
}
