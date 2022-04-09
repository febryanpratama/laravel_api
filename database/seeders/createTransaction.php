<?php

namespace Database\Seeders;

use App\Models\transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createTransaction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        transaction::create([
            'buyer_id'=>'2',
            'seller_id'=>'3',
            'no_transaction' => 'Trx-001',
            'total_amount' => '100000',
            'status' => 'unpaid'
        ]);
        transaction::create([
            'buyer_id'=>'2',
            'seller_id'=>'3',
            'no_transaction' => 'Trx-002',
            'total_amount' => '110000',
            'status' => 'unpaid'
        ]);
        transaction::create([
            'buyer_id'=>'2',
            'seller_id'=>'3',
            'no_transaction' => 'Trx-011',
            'total_amount' => '540000',
            'status' => 'unpaid'
        ]);
        transaction::create([
            'buyer_id'=>'2',
            'seller_id'=>'3',
            'no_transaction' => 'Trx-013',
            'total_amount' => '200000',
            'status' => 'unpaid'
        ]);
        transaction::create([
            'buyer_id'=>'2',
            'seller_id'=>'3',
            'no_transaction' => 'Trx-017',
            'total_amount' => '94000',
            'status' => 'unpaid'
        ]);
        transaction::create([
            'buyer_id'=>'2',
            'seller_id'=>'3',
            'no_transaction' => 'Trx-004',
            'total_amount' => '250000',
            'status' => 'unpaid'
        ]);
    }
}
