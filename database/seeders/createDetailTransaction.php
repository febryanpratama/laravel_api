<?php

namespace Database\Seeders;

use App\Models\detail_transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createDetailTransaction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        detail_transaction::create([
            'transactions_id' => '1',
            'name_product' => 'produk_1',
            'amount' => '50000',
        ]);

        detail_transaction::create([
            'transactions_id' => '1',
            'name_product' => 'produk_2',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '2',
            'name_product' => 'produk_1',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '2',
            'name_product' => 'produk_2',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '3',
            'name_product' => 'produk_1',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '3',
            'name_product' => 'produk_2',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '4',
            'name_product' => 'produk_1',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '4',
            'name_product' => 'produk_2',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '5',
            'name_product' => 'produk_1',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '5',
            'name_product' => 'produk_2',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '6',
            'name_product' => 'produk_1',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '6',
            'name_product' => 'produk_2',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '6',
            'name_product' => 'produk_1',
            'amount' => '50000',
        ]);
        detail_transaction::create([
            'transactions_id' => '5',
            'name_product' => 'produk_2',
            'amount' => '50000',
        ]);
    }
}
