<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Status extends Model
{
    public function people(){
        return $this->hasMany(Person::class);
    }
}
