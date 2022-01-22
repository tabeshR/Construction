<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'instagram','telegram','facebook','whatsapp','tell',
        'name','subject','text','phoneOrEmail'
    ];
}
