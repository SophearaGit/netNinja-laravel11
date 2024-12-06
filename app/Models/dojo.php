<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dojo extends Model
{


    protected $fillable = ['name', 'description', 'location'];


    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    public function ninja()
    {
        return $this->hasMany(ninja::class);
    }
}
