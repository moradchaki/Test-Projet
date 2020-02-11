<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['nom','prenom', 'departement', 'num_telephone'];

}
