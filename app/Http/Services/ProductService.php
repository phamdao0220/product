<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-19
 * Time: 16:33
 */

namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;

class ProductService extends BaseService
{
protected $productRepo;
public function __construct(ProductRepository $productRepository)
{
    $this->productRepo=$productRepository;
}
function getAll(){
    return $this->productRepo->getAll();
}
}
