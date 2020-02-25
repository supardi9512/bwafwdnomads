<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes; // mengaktifkan soft deletes

    // menyimpan secara langsung
    protected $fillable = [
        'transactions_id', 'username', 'nationality',
        'is_visa', 'doe_passport'
    ];

    protected $hidden = [

    ];

    // relasi ke satu data di tabel transactions
    public function transaction() {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

}
