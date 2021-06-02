<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function index()
    {
      return view('admin.brand.add-brand');
    }

    public function addNewBrand(Request $request)
    {
      $this->validate($request, [
        'brand_name'=>'required|regex:/^[\pL\s\-]+$/u',
        'brand_description'=>'required',
        'publication_status'=>'required'
      ]);

      $brand=new Brand();
      $brand->brand_name         = $request->brand_name;
      $brand->brand_description  = $request->brand_description;
      $brand->publication_status = $request->publication_status;

      $brand->save();

      return redirect('/brand/add')->with('message', 'New brand added successfully.');
    }
}
