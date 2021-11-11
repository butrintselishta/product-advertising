<?php

namespace App\Repositories;

use App\Models\Product;

class HomeRepository
{

    public function show()
    {
        $latestProducts = Product::with('menu')
            ->orderByDesc('created_at')
            ->get();

        return view('index',compact('latestProducts'));
    }
}
