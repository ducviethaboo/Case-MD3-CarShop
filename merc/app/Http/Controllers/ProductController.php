<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\ProductModel;
use App\Service\ProductService;
use Illuminate\Http\Request;

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

    public function showById($id)
    {
        $product = $this->findById($id);
        return view('admin.edit', compact('product'));
    }

    public function edit(Request $request)
    {
        $productId = $request->productId;
        $productName = $request->productName;
        $productType = $request->productType;
        $productColor = $request->productColor;
        $productPrice = $request->productPrice;
        $product = new ProductModel($productId ,$productName, $productType, $productColor, $productPrice);
        $this->productController->editService($product);
        return redirect()->route('admin.show');

    }

    public function showFormAdd()
    {
        return view('admin.add');
    }

    public function add(Request $request)
    {
        $data = $request->all();
        $this->productController->addService($data);
        return redirect()->route('admin.show');
    }

    public function showUser()
    {
        $products = $this->productController->getAllProductService();
        return view('user.shop', compact('products'));
    }

}
