<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    public $timestamps =false;
    public function getData(){
        return $this->hasOne(
            'App\Models\Freelancer'
        );
    }
}
