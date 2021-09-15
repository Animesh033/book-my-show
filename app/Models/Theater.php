<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Theater extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'address'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
