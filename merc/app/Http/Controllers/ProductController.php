<?php


namespace App\Http\Controllers;


use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductModel;
use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productController;

    public function __construct(ProductService $productService)
    {
        $this->productController = $productService;
    }

    public function searchProduct(Request $request)
    {
        $key = $request->search;
        $products = DB::table('products')->where('productName', 'LIKE', '%' . $key . '%')->get();
        $existProduct = DB::table('products')->where('productName', 'LIKE', '%' . $key . '%')->exists();
        if(!$existProduct) {
            $request->session()->flash('not-found', 'Không tìm thấy sản phẩm nào!');
        }
        return view('user.shop', compact('products'));
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

    public function showProductDetail($id)
    {
        $product = $this->findById($id);
        return view('user.productdetail', compact('product'));
    }

    public function edit(ProductRequest $request)
    {
        $productId = $request->productId;
        $productName = $request->productName;
        $productType = $request->productType;
        $productColor = $request->productColor;
        $productPrice = $request->productPrice;
        $productDesc = $request->productDesc;
        $imageName = 'images/user-img/' . time() . '.' . $request->productImg->extension();
        $request->productImg->move(public_path('images/user-img/'), $imageName);
        $productImg = $imageName;
        $product = new ProductModel($productId, $productName, $productType, $productColor, $productPrice, $productDesc, $productImg);
        $this->productController->editService($product);
        return redirect()->route('admin.show');

    }

    public function add(ProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $imageName = 'images/user-img/' . time() . '.' . $request->productImg->extension();
        $request->productImg->move(public_path('images/user-img/'), $imageName);
        $product->productImg = $imageName;
        $product->save();
        return redirect()->route('admin.show');
    }

}
