<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
USE App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductRepositoryInterface $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        //
    }

    public function byBrand(Menu $menu = null)
    {
        $products = $this->product->findByBrand($menu);
        return view('products', compact('products'));
    }

    public function findProduct(Menu $menu,Product $product)
    {
        $product = $this->product->findProduct($menu,$product);
        return view('single-product', ['latestUpdatedProducts' => $product[0], 'product'=>$product[1]]);
    }
}
