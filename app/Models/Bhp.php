<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bhp extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_bhp',
        'stock',
        'minimum_stock',
        'unit_id',
    ];

    //relasi ke tabel units
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    //relasi ke tabel BhpRequestDetails
    public function requestDetails()
    {
        return $this->hasMany(BhpRequestDetail::class, 'bhp_id');
    }

    //relasi ke tabel InTransaction
    public function inTransactions()
    {
        return $this->hasMany(InTransaction::class, 'bhp_id');
    }

    //relasi ke tabel OutTransaction
    public function outTransactions()
    {
        return $this->hasMany(OutTransaction::class, 'bhp_id');
    }

    //relasi ke tabel transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'bhp_id');
    }

}