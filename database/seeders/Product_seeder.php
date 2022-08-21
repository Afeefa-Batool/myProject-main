<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // php artisan db:seed --class=Product_seeder
    {
        DB::table('products')->insert([

            [
             'name'=>'Pakistani Bridal Set',
             'price'=> "30,000",
             'category'=>"Bridal Set",
             'description'=>"Clear, zircon and champagne colored zircons alongwith treated rubies.",

             'gallery'=>"images/x.jpg",
            ],

            [
                'name'=>'Pakistani Bridal Set',
                'price'=> "30,000",
                'category'=>"Bridal Set",
                'description'=>"Clear, zircon and champagne colored zircons alongwith treated rubies.",

                'gallery'=>"images/y.jpg",
               ],
            [
                'name'=>'Pakistani Bridal Set',
                'price'=> "30,000",
                'category'=>"Bridal Set",
                'description'=>"Clear, zircon and champagne colored zircons alongwith treated rubies.",

                'gallery'=>"images/z.jpg",
               ]

            ]);
    }
}
