<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function all()
    {
        return Product::inRandomOrder()->get();
    }

    public function findByBrand($menu)
    {
        if($menu !== null){
            $brand = Menu::where('slug', $menu)
                ->with('products')
                ->orderbydesc('updated_at')
                ->firstOrFail();

            return $brand->products;
        }
        return Product::inRandomOrder()->get();
    }

    public function findProduct(Menu $menu, Product $product)
    {
        $latestUpdatedProducts = Product::where('menu_id', $menu->id)
            ->orderBy('updated_at')
            ->get();

        return [$latestUpdatedProducts,$product];
    }
}
