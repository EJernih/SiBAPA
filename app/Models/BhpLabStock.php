<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BhpLabStock extends Model
{
    use HasFactory;
    protected $fillable = [
        'bhp_id',
        'lab_id',
        'stock'
    ];

    public function bhp()
    {
        return $this->belongsTo(Bhp::class);
    }

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
