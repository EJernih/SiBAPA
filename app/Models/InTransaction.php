<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'intransaction_date',
        'prodi',
        'bhp_id',
        'qty_intransaction',
        'unit_id',
        'location',
        'description'
    ];

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
