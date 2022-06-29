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
             'name'=>'Handcuff with Ring',
             'price'=> "28,500",
             'category'=>"Handcuff",
             'description'=>"Pink, aqua, peridot, coffee, champagne and purple colored zircons alongwith clear zircons.",
            
             'gallery'=>"https://cdn.shopify.com/s/files/1/0510/2374/1127/products/BT-133-A_grande.jpg?v=1619183156",
            ],
            [
             'name'=>'Nawabi Pearl Bali Jhumka',
             'price'=> "20,000",
             'category'=>"Jhumka",
             'description'=>" champagne and purple colored zircons ",
            
             'gallery'=>"https://cdn.shopify.com/s/files/1/0510/2374/1127/products/BJ157-C_large.jpg?v=1615374083",
            ],
            [
             'name'=>'Fine Legacy Pakistani Bridal Set',
             'price'=> "30,000",
             'category'=>"Bridal Set",
             'description'=>"Clear, zircon and champagne colored zircons alongwith treated rubies.",
            
             'gallery'=>"https://cdn.shopify.com/s/files/1/0510/2374/1127/products/34_69ed0ad1-3626-4e57-9506-62c227e7f95e.jpg?v=1617626286",
            ],
            [
             'name'=>'Ruby Fan Ring',
             'price'=> "5,000",
             'category'=>"Rings",
             'description'=>"Gold plated with the top part rhodium finished in white.",
            
             'gallery'=>"https://cdn.shopify.com/s/files/1/0510/2374/1127/products/63_40e422ca-452d-4781-bb0d-007766071c30_grande.jpg?v=1615207911",
            ],
            [
                'name'=>'Handcuff with Ring',
                'price'=> "28,500",
                'category'=>"Handcuff",
                'description'=>"Pink, aqua, peridot, coffee, champagne and purple colored zircons alongwith clear zircons.",
               
                'gallery'=>"https://cdn.shopify.com/s/files/1/0510/2374/1127/products/BT-133-A_grande.jpg?v=1619183156",
            ],
            [
                'name'=>'Pearl Globand ',
                'price'=> "22,500",
                'category'=>"necklace",
                'description'=>" champagne and purple colored zircons alongwith clear zircons.",
               
                'gallery'=>"images/32.png",
            ]
            ]);
    }
}
