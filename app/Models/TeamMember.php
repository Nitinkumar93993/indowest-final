<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;
    protected $table = "team_member";
    protected $primaryKey = "id";
    protected $team_image = [
        'member_name', 'member_image', 'member_title', 'member_since', 'member_contact', 'member_email',
        'member_website', 'member_fax', 'member_skill', 'undefine', 'about_me',  'qualification', 'achivement',
        'twitter_url',  'facebook_url',  'instagram_url'
    ];
}
