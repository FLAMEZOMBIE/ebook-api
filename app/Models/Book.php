<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authors;

class Book extends Model
{
    protected $table = "book";
    protected $fillable = [
        'title', 
        'description', 
        'author_id', 
        'publisher', 
        'date_of_issue'
    ];
    public function authors()
    {
        return $this->belongsTo(Authors::class, 'author_id');
    }
}