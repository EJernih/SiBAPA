<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_date',
        'prodi',
        'bhp_id',
        'qty_intransaction',
        'unit_id',
        'location',
        'description'
    ];
}
