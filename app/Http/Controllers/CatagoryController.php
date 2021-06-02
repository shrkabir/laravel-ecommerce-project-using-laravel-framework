<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use DB;


class CatagoryController extends Controller
{
    public function index()
    {
      return view('admin.catagory.add-catagory');
    }

    public function saveCatagory(Request $request)
    {
      $category=new Category();

      $category->category_name=$request->category_name;
      $category->category_description=$request->category_description;
      $category->publication_status=$request->publication_status;
      $category->save();

      //Category::create($request->all());

      /*DB::table('categories')->insert([
        'category_name'=>$request->category_name,
        'category_description'=>$request->category_description,
        'publication_status'=>$request->publication_status
      ]);*/
      //return 'success';
      return redirect('/category/add')->with('message', 'New Category created successfully');
    }

    public function manageCatagory()
    {
      $categories=Category::all();
      //return $categories;
      return view('admin.catagory.manage-catagory', ['categories'=>$categories]);
    }

    public function unpublishCategory($category_id)
    {
      $category=Category::find($category_id);
      $category->publication_status=0;
      $category->save();

      return redirect('/catagory/manage')->with('message', 'Category unpublished successfully');
    }

    public function publishCategory($category_id)
    {
      $category=Category::find($category_id);
      $category->publication_status=1;
      $category->save();

      return redirect('/catagory/manage')->with('message', 'Category published successfully');
    }

    public function editCategory($category_id)
    {
      $category=Category::find($category_id);
      return view('admin.catagory.edit-category', ['category'=>$category]);
    }

    public function updateCategory(Request $request)
    {
      //return $request->all();
      $category=Category::find($request->category_id);
      $category->category_name=$request->category_name;
      $category->category_description=$request->category_description;
      $category->publication_status=$request->publication_status;
      $category->save();

      return redirect('/catagory/manage')->with('message', 'Category updated successfully');
    }

    public function deleteteCategory($category_id)
    {
      $category=Category::find($category_id);
      $category->delete();

        return redirect('/catagory/manage')->with('message', 'Category deleted successfully');
    }


}
