<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable=[
        'title',
        'author',
        'image',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
