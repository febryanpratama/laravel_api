<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\detail_transaction;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'no_transaction', 'buyer_id', 'seller_id', 'total_amount', 'status'
    ];

    public function buyer(){
        return $this->belongsTo(User::class,'buyer_id', 'id');
    }
    public function seller(){
        return $this->belongsTo(User::class,'seller_id', 'id');
    }

    public function detail_transactions(){
        return $this->hasMany(detail_transaction::class, 'transactions_id', 'id');
    }
}
