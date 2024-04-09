<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickInqueryModel extends Model
{
    use HasFactory;
    protected $table = "quick_inquery";
    protected $primaryKey = "id";
}
