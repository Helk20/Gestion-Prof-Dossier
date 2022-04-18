<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;

class Professeur extends Model
{
    public function scopeProfs($query)
    {
        if (Auth::user()->role_id == 4)
        {
            return $query->where('id_user', '=', Auth::user()->id);
        }
        
    }
}
