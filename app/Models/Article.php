<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable =[
        'text','subject','user_id','en_text','en_subject'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
