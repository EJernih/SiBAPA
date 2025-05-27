<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OutTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'outtransaction_date',
        'matakuliah',
        'prodi',
        'location',
        'bhp_id',
        'qty_outtransaction',
        'unit_id',
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
