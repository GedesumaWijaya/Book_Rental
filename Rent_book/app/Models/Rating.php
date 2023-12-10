<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table='ratings';
    protected $fillable =[
        'author_id',
        'book_id',
        'rating',
    ];

    public function authors(){
        return $this->belongsTo(Autors::class);
    }
    
    public function books(){
        return $this->belongsTo(Books::class);
    }

}
