<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
      protected $fillable = [
        'id', 'name', 'email', 'message', 'path', 'status', 'created_at', 'updated_at'
    ];
}
