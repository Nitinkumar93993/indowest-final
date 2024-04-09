<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoomentModel extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['comment', 'author', 'email', 'url', 'cookies_consent'];

    // Define the relationship for replies
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}

