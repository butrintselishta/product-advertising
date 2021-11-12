<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\HomeRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    protected $homeRepository;

    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function index()
    {
        return $this->homeRepository->show();
    }

    public function store(Request $request){
        $prod = Product::find(2);
        $prod->addMedia($request->foto)
            ->toMediaCollection('lea');

        return redirect()->back();
    }

}
