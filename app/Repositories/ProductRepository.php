<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function all()
    {
        // return Product::inRandomOrder()->get();
    }

    public function findByBrand($menu)
    {
        if ($menu !== null) {
            $products = Product::whereHas('menu', function ($query) use ($menu) {
                $query->where('id', $menu->id);
            })->paginate(12);

            return $products;
        }
        return Product::inRandomOrder()->paginate(12);
    }

    public function findProduct($menu, $product)
    {
        $latestUpdatedProducts = Product::
                                        whereHas('menu', function ($query) use ($menu) {
                                            $query->where('id', $menu->id);
                                        })
                                        ->orderBy('updated_at')
                                        ->take(3)
                                        ->get();
        return [$latestUpdatedProducts, $product];
    }
}
