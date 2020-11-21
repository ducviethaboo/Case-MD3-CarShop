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
        Product::destroy($id);
    }
}
