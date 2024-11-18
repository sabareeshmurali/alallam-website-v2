<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'in_contents';
    protected $primaryKey = 'content_id';
    public $timestamps = false; 
    protected $fillable = [
        'content_key',
        'content_page',
        'content_english',
        'content_arabic',
    ];
}