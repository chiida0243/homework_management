<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homework extends Model
{
    use HasFactory;

    protected $table="homeworks";

    
    protected $fillable = [
        'homework_url',
        
    ];

}
