<?php


namespace App\Repository;


use App\Models\Product;
use http\Env\Request;
use Illuminate\Contracts\Session\Session;

class ProductRepo
{
    public function getAll()
    {
        return Product::all();
    }

    public function findById($id)
    {
        return Product::findOrFail($id);
    }

    public function deleteByIdRepo($id)
    {
        Product::destroy($id);
    }

    public function edit($products)
    {
        $product = Product::find($products->getProductId());
        $product->productName = $products->getProductName();
        $product->productType = $products->getProductType();
        $product->productColor = $products->getProductColor();
        $product->productPrice = $products->getProductPrice();
        $product->save();
    }

    public function add($data)
    {
        Product::create($data);

    }
}
