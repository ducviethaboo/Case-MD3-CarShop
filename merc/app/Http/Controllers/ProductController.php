<?php


namespace App\Http\Controllers;


use App\Service\ProductService;

class ProductController extends Controller
{
    protected $productController;

    public function __construct(ProductService $productService)
    {
        $this->productController = $productService;
    }

    public function showAdmin()
    {
        $products = $this->productController->getAllProductService();
        return view('admin.admin', compact('products'));
    }

    public function findById($id)
    {
        return $this->productController->findById($id);
    }

    public function delete($id)
    {
        $this->productController->deleteByIdService($id);
        return redirect()->route('admin.show');
    }

    public function edit($id)
    {
        $product = $this->findById($id);
        return view('admin.edit', compact('product'));
    }

    public function showUser()
    {
        $products = $this->productController->getAllProductService();
        return view('user.shop', compact('products'));
    }

}
