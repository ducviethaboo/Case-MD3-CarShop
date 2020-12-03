<?php


namespace App\Repository;


use App\Models\Product;


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
        $product = $this->findById($id);
        $product->delete();
    }

    public function edit($products)
    {
        $product = Product::find($products->getProductId());
        $product->productName = $products->getProductName();
        $product->productType = $products->getProductType();
        $product->productColor = $products->getProductColor();
        $product->productPrice = $products->getProductPrice();
        $product->productDesc = $products->getProductDesc();
        $product->productImg = $products->getProductImg();
        $product->save();
    }

    public function add($data)
    {
//        $product = new Product();
//        $product->fill($data);
//        $product->productImg = 'images/user-img/' . $data['productImg'];
//        $product->save();
    }
}
