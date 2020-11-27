<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable=['image'];

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable')->withDefault();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }


}
