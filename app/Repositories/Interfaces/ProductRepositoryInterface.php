<?php

namespace App\Repositories\Interfaces;

use App\Models\Menu;
use App\Models\Product;

interface ProductRepositoryInterface{
    public function all();
    public function findByBrand($menu);
    public function findProduct($menu,$slug);
}
