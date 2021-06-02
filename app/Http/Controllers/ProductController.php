<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use Image;
use DB;

class ProductController extends Controller
{
    public function index()
    {
      $categories=Category::where('publication_status', 1)->get();
      $brands=Brand::where('publication_status', 1)->get();

      return view('admin.product.add-product', [
        'categories'  =>$categories,
        'brands'      =>$brands
      ]);
    }

    protected function productAddFormValidation($request)
    {
      $this->validate($request, [
      'category_id'               =>'required',
      'brand_id'                  =>'required',
      'product_name'              =>'required',
      'product_price'             =>'required',
      'product_quantity'          =>'required',
      'product_short_description' =>'required',
      'product_long_description'  =>'required',
      'product_image'             =>'required',
      'publication_status'        =>'required'
      ]);
    }

    protected function productImageUpload($request)
    {
      $productImage=$request->file('product_image');
      //$imageName=$productImage->getClientOriginalName();
      $imageExt=$productImage->getClientOriginalExtension();
      $imageName=$request->product_name.'.'.$imageExt;
      $directory="produc-images/";
      $imageUrl=$directory.$imageName;
      //$productImage->move($directory, $imageName);
      Image::make($productImage)->resize(450,400)->save($imageUrl);

      return $imageUrl;
    }

    protected function addProductInfoToDB($request, $imageUrl)
    {
      $product=new Product();
      $product->category_id     =$request->category_id;
      $product->brand_id        =$request->brand_id;
      $product->product_name    =$request->product_name;
      $product->product_price   =$request->product_price;
      $product->product_quantity=$request->product_quantity;
      $product->product_short_description =$request->product_short_description;
      $product->product_long_description  =$request->product_long_description;
      $product->product_image             =$imageUrl;
      $product->publication_status        =$request->publication_status;
      $product->save();
    }

    public function addNewProduct(Request $request)
    {
      $this->productAddFormValidation($request);
      $imageUrl=$this->productImageUpload($request);
      $this->addProductInfoToDB($request, $imageUrl);

      return redirect('/product/add')->with('message', 'New product added successfully');
    }

    public function manageProduct()
    {
      $products=DB::table('products')
          ->join('categories', 'categories.category_id', '=', 'products.category_id')
          ->join('brands', 'brands.id', '=', 'products.brand_id')
          ->select('products.*', 'categories.category_name', 'brands.brand_name')
          ->get();
          //return $products;
      return view('admin.product.manage-product', ['products'=>$products]);
    }

    public function editProduct($product_id)
    {
      $product=Product::find($product_id);
      $categories=Category::where('publication_status', 1)->get();
      $brands=Brand::where('publication_status', 1)->get();
      return view('admin.product.edit-product', [
        'product'   =>$product,
        'categories'=> $categories,
        'brands'    => $brands
    ]);
    }

    protected function productUpdateFormValidation($request)
    {
      $this->validate($request, [
      'category_id'               =>'required',
      'brand_id'                  =>'required',
      'product_name'              =>'required',
      'product_price'             =>'required',
      'product_quantity'          =>'required',
      'product_short_description' =>'required',
      'product_long_description'  =>'required',
      'product_image'             =>'required',
      'publication_status'        =>'required'
      ]);
    }

    protected function productImageUpdate($request)
    {
      $productImage=$request->file('product_image');
      //$imageName=$productImage->getClientOriginalName();
      $imageExt=$productImage->getClientOriginalExtension();
      $imageName=$request->product_name.'.'.$imageExt;
      $directory="produc-images/";
      $imageUrl=$directory.$imageName;
      //$productImage->move($directory, $imageName);
      Image::make($productImage)->resize(450, 400)->save($imageUrl);

      return $imageUrl;
    }

    protected function updateProductInfoToDB($product_id, $request, $imageUrl)
    {
      $product=Product::find($product_id);//new Product();
      //$product->find($product_id)
      $product->category_id     =$request->category_id;
      $product->brand_id        =$request->brand_id;
      $product->product_name    =$request->product_name;
      $product->product_price   =$request->product_price;
      $product->product_quantity=$request->product_quantity;
      $product->product_short_description =$request->product_short_description;
      $product->product_long_description  =$request->product_long_description;
      $product->product_image             =$imageUrl;
      $product->publication_status        =$request->publication_status;
      $product->save();
    }

    public function updateProduct($product_id, Request $request)
    {
      $this->productUpdateFormValidation($request);
      $imageUrl=$this->productImageUpdate($request);
      $this->updateProductInfoToDB($product_id, $request, $imageUrl);

      return redirect('/product/manage')->with('message', 'Product updated successfully');
    }
}
