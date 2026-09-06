<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Customer;
use App\Models\TransactionDetail;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_pelanggan',
        'tanggal',
        'total',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(
            Customer::class,
            'id_pelanggan',
            'id_pelanggan'
        );
    }

    public function details()
    {
        return $this->hasMany(
            TransactionDetail::class,
            'id_transaksi',
            'id_transaksi'
        );
    }
}
