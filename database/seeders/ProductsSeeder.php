<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'sq_title' => 'Filxhana Bernadotte',
                'en_title' => 'Cups Bernadotte',
                'slug' => "filxhana-bernadotte",
                'price' => 68.67,
                'new_price' => 54.90,
                'sq_color' => 'Bardh me argjend',
                'en_color' => 'White with silver',
                'sq_description' => '<ul style=\"margin-left:30px\"><li>6 copë filxhana </li></ul>',
                'en_description' => '<ul style=\"margin-left:30px\"><li>6 cups </li></ul>',
                'menu_id' => 3
            ],
            [
                'sq_title' => 'Pjata compote',
                'en_title' => 'Compote dish',
                'slug' => "pjata-compote",
                'price' => 26.94,
                'new_price' => null,
                'sq_description' => '<ul style=\"margin-left:30px\"><li>6 pjata<br></li></ul>',
                'en_description' => '<ul style=\"margin-left:30px\"><li>6 f<br></li></ul>',
                'menu_id' => 6
            ],
            [
                'sq_title' => 'Filxhana LOSS',
                'en_title' => 'Cups LOSS',
                'slug' => "filxhana-loss",
                'price' => 43.79,
                'new_price' => 34.90,
                'sq_description' => '<ul><li>6 copë filxhana </li></ul>',
                'en_description' => '<ul><li>6 cups </li></ul>',
                'menu_id' => 4
            ],
        ];
        foreach ($products as $product) {
           Product::Create($product);
        }
    }
}
