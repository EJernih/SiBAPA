<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prodi_id'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
