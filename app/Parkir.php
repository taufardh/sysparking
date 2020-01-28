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
    //Timestamp
    public $timestamp = true;

     protected $fillable = ['plat_nomor', 'status', 'biaya'];
}
