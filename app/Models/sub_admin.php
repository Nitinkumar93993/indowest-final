<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_admin extends Model
{
    use HasFactory;

    protected $table = "set_authority_migrate";
    protected $primaryKey = "id"; // Changed to primaryKey

    protected $fillable = [
        'name', 'user_image', 'contact', 'auth_email', 'username', 'password', 'set_permission'
    ];
}
