<?php

namespace App\Models;
use App\Models\Category ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category(){

        return $this->belongsTo(Category::class) ;
    }

    // define an relationship between Auther and The post
    public function auther(){

        return $this->belongsTo(User::class, 'user_id') ;
    }
}
