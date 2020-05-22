<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = "Upload";
 
    protected $fillable = ['file'];
}
