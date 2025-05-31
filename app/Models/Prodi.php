<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodi extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    //relasi dengan lab
    public function labs()
    {
        return $this->hasMany(Lab::class);
    }
}
