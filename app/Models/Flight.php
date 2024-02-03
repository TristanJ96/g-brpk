<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Flight extends Model
{
    use HasFactory;


    //relations

    public function user() : HasOne {
        return $this->hasOne(User::class, 'id','user_id');
    }


    //scopes



    //attributes
}
