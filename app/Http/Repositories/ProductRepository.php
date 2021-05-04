<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-04-19
 * Time: 16:34
 */

namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository extends Repository
{
function getAll(){
    return Product::orderBy('id','DESC')->paginate(4);

}
}
