<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventManager extends Model
{
    use HasFactory;
    protected $table = 'events_manage';
    protected $primaryKey = 'id';
    protected  $fileNameTestimonial = ['event_image', 'event_type', 'event_title', 'event_date', 'event_timing'];  
}
