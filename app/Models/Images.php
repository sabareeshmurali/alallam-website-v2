<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'in_images';
    protected $primaryKey = 'img_id';
    public $timestamps = false; 
    protected $fillable = [
        'img_key',
        'img_page',
        'img_name',
        'img_path',
    ];
}