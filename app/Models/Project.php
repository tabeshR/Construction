<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id','img','name','description',
        'en_name','en_description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
