<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slogan', 'about', 'massage', 'logo', 'favicon', 'phone', 'email', 'address', 'facebook', 'twitter', 'linkedin', 'youtube'];
}
