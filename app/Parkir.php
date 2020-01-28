<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    //
     //Table name
     protected $table = 'parkir';
     //Primary Key
     public $primaryKey = 'id';
     protected $dateFormat = 'U';
}
