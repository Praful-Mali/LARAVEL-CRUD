<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $fillable = ['title','content'];

    //custom timestamps name

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

}
