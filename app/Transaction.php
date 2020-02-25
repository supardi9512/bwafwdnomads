<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes; // mengaktifkan soft deletes

    // menyimpan secara langsung
    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [

    ];

    // relasi ke banyak data di tabel transaction_details
    public function details() {
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    // relasi ke satu data di tabel travel_packages
    public function travel_package() {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    // relasi ke satu data di tabel users
    public function user() {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
