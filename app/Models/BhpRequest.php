<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BhpRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'semester',
        'academic_year',
        'request_by',
        'request_date',
        'status'
    ];

    //relasi ke tabel BhpRequestDetail
    public function details()
    {
        return $this->hasMany(BhpRequestDetail::class);
    }
    
}