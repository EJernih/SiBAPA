<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'intransaction_date',
        'lab_id',
        'bhp_id',
        'qty_intransaction',

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

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
