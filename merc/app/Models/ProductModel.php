<?php


namespace App\Models;


class ProductModel
{
    public $productId;
    public $productName;
    public $productType;
    public $productColor;
    public $productPrice;

    public function __construct($productId, $productName, $productType, $productColor, $productPrice)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productType = $productType;
        $this->productColor = $productColor;
        $this->productPrice = $productPrice;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @return mixed
     */
    public function getProductColor()
    {
        return $this->productColor;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }


}
