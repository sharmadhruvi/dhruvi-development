<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = ['id','title','description','image','user_fk','created_at','updated_at'];
}
