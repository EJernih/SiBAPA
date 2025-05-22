<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BhpRequestDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'bhp_request_id',
        'bhp_id',
        'unit_id',
        'quantity_requested',
        'description'
    ];

    //relasi ke tabel bhp_requests
    public function bhpRequest()
    {
        return $this->belongsTo(BhpRequest::class);
    }

    //relasi ke tabel bhps
    public function bhp()
    {
        return $this->belongsTo(Bhp::class);
    }

    //relasi ke tabel units
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
