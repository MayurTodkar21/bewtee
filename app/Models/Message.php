<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\False_;

class Message extends Model
{
    use HasFactory;
    public $timestamps = false;
}
