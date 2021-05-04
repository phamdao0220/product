<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new Product();
        $product->name='product1';
        $product->bod='12/10/2021';
        $product->email='product1@gmail.com';
        $product->save();

        $product=new Product();
        $product->name='product2';
        $product->bod='12/10/2012';
        $product->email='product2@gmail.com';
        $product->save();

        $product=new Product();
        $product->name='product3';
        $product->bod='12/10/2003';
        $product->email='product3@gmail.com';
        $product->save();
    }
}
