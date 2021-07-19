<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $guarded = [];

    function getUrlPathAttribute(){
        return asset("/img/vimalca/$this->image");
    }
}
