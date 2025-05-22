<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    //relasi dengan tabel bhp
    public function bhps()
    {
        return $this->hasMany(Bhp::class, 'unit_id');
    }

    //relasi dengan tabel bhp request detail
    public function bhpRequestDetails()
    {
        return $this->hasMany(BhpRequestDetail::class, 'unit_id');
    }
}
