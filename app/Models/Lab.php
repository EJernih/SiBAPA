<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lab extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_lab',
        'prodi_id'
    ];

    //relasi ke tabel prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    //relasi ke tabel bhp
    public function bhps()
    {
        return $this->hasMany(BHP::class);
    }

    //relasi ke tabel transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function inTransactions()
    {
        return $this->hasMany(InTransaction::class);
    }

    //relasi ke tabel bhp_lab_stocks
    public function labStocks()
    {
        return $this->hasMany(BHPLabStock::class);
    }
}