<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies'; // Assuming replies are stored in a separate table
    protected $primaryKey = 'id';
    protected $fillable = ['reply']; // Exclude 'id' from fillable fields

    // Define the relationship with the comment
    public function comment()
    {
        return $this->belongsTo(CoomentModel::class);
    }
}

