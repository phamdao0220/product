<?php

namespace App\Http\Controllers;
use App\Http\Repositories\ProductRepository;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService )
    {
        $this->productService=$productService;
    }

    public function index(){

        $products=$this->productService->getAll();
//        dd($products);
        return view('admin.products.list',compact('products'));
    }
}
