<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Dossier extends Model
{
    public function scopeCurrentUser($query)
    {
       
        if (Auth::user()->role_id == 2)
        {
            return $query->where('professeur', '=', Auth::user()->name);
        }
       
    }

    public function save(array $options = [])
    {
        // If no owner has been assigned, assign the current user's id as the owner of the workstation
        if (!$this->professeur && Auth::user()) {
            $this->professeur = Auth::user()->name;
        }

        return parent::save();
    }
}