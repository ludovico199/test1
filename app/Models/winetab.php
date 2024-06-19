<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\winetablecontroller;
class winetab extends Model
{
    use HasFactory;
    protected $table = 'winebox';
    protected $fillable = ['title', 'type', 'image_path', 'price', 'year', 'description', 'Denom', 'grapes', 'Alcool', 'Cl', 'food'];
}
