<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=> "Admin",
            'email'=>"admin@gmail.com",
            'password' => bcrypt("admin123"),
            'roles' =>'admin',
        ]);

        User::create([
            'name'=> "Buyer 1",
            'email'=>"buyer@gmail.com",
            'password' => bcrypt("buyer123"),
            'roles' =>'buyer',
        ]);

        User::create([
            'name'=> "Seller",
            'email'=>"seller@gmail.com",
            'password' => bcrypt("seller123"),
            'roles' =>'seller',
        ]);
        User::create([
            'name'=> "user1",
            'email'=>"user1@gmail.com",
            'password' => bcrypt("user1123"),
            'roles' => 'buyer',
        ]);
        User::create([
            'name'=> "user2",
            'email'=>"user2@gmail.com",
            'password' => bcrypt("user2123"),
            'roles' =>'buyer',
        ]);
        User::create([
            'name'=> "user3",
            'email'=>"user3@gmail.com",
            'password' => bcrypt("user3123"),
            'roles' =>'buyer',
        ]);

    }
}
