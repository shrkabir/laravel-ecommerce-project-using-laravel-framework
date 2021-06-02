<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Slider;
use Image;

class MyShopController extends Controller
{
    public function index(){
      $newArrivalProducts=Product::where('publication_status', 1)
                                  ->orderBy('product_id', 'DESC')
                                  ->take(4)
                                  ->get();
      $allProducts=Product::all();

      $slider_informations=Slider::all();

      return view('front-end.home.home', [
        "newArrivalProducts"=>$newArrivalProducts,
        "allProducts"=>$allProducts,
        "slider_informations"=>$slider_informations
      ]);
    }

    public function catagoryProduct($category_id){
    //  $categories=Category::where('publication_status', 1)->get();
      /*return view('front-end.Catagory.catagory-content', [
        "categories"=>$categories
      ]);*/
      $categoryProducts=Product::where('category_id', $category_id)
                                ->where('publication_status', 1)
                                ->get();
      $category=Category::find($category_id);
      return view('front-end.Catagory.catagory-content', [
        'categoryProducts'=>$categoryProducts,
        'category'=> $category
      ]);
    }

    public function productDetails($product_id){
      $product=Product::find($product_id);
      $recentProducts=Product::where('publication_status', 1)
                                  ->orderBy('product_id', 'DESC')
                                  ->take(4)
                                  ->get();
      return view('front-end.product.product-details', [
        'product'=>$product,
        'recentProducts'=>$recentProducts
      ]);
    }

    public function manageSlider(){
      $slider_informations=Slider::all();

      return view('admin.slider.manage-slider', [
        'slider_informations'=>$slider_informations
      ]);
    }

    public function manageSliderImage(Request $request){
      $slider=new Slider();

      $slider->slider_title=$request->slider_title;
      $slider_image=$request->file('slider_image');
      $img_extension=$slider_image->getClientOriginalExtension();
      $img_name=$request->slider_title.'.'.$img_extension;
      $directory="slider-images/";
      $image_url=$directory.$img_name;
      Image::make($slider_image)->resize(1400, 600)->save($image_url);
      $slider->slider_image=$image_url;

      $slider->save();

      return redirect('/manage/slider');
    }

    public function deleteSliderImage($slider_image_id){
      $slider_image=Slider::find($slider_image_id);
      $slider_image->delete();

      return redirect('/manage/slider')->with('message', 'Slider image deleted successfully');
    }

    public function contactUs(){
      return view('front-end.contact-us.contactUs');
    }
}
