<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
            'transaction_date',
            'type',
            'lab_id',
            'bhp_id',
            'qty',
            'unit_id',
            'description'
        ];

        //relasi ke tabel bhp
        public function bhp()
        {
            return $this->belongsTo(Bhp::class);
        }

        //relasi ke tabel unit
        public function unit()
        {
            return $this->belongsTo(Unit::class);
        }

        //relasi ke tabel lab
        public function lab()
        {
            return $this->belongsTo(Lab::class);
        }
}
