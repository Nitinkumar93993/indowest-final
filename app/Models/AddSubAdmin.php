<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSubAdmin extends Model
{
    use HasFactory;
    protected $table = "add_subadmin";
    protected $primaryKey = "id";
    protected $fillable = [
        'sbname', 'sbfile', 'sbemail', 'sbusername', 'sbpassword', 'sbAdd', 'sbEdit', 'sbView', 'sbDelete', 'blogAdd ', 'blogEdit', 'blogView', 'blogDelete', 'testimonialAdd', 'testimonialEdit', 'testimonialView', 'testimonialDelete', 'courseAdd', 'courseEdit', 'courseView', 'courseDelete', 'teamAdd', 'teamEdit', 'teamView', 'teamDelete', 'eventAdd', 'eventEdit', 'eventView', 'eventDelete', 'oneAdd', 'oneEdit', 'oneView', 'oneDelete', 'twoAdd', 'twoEdit', 'twoView', 'twoDelete'
    ];
}
