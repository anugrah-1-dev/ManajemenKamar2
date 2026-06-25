<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'sewa_id',
        'harga_selected',
        'biaya_admin',
        'harga_total',
        'bukti_pembayaran'
    ]; public function sewa()
    {
        return $this->belongsTo(Sewa::class);
    }
}

