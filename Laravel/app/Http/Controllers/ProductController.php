<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ 

        $product = DB::table('products')->latest()->paginate(1);
        
        return view('product.index',compact('product'));
    }

    public function create(){
        $categories = DB::table('main_categories')
        ->select('main_categories.id', 'main_categories.maincategory')
        ->get();
return view('product.create', ['categories'=>$categories]);

        
    }

    public function getProducts(){
        $products = Product::all();
        return $products;
    }

    public function Store(Request $request){
       $data = array();
      
       $data['product_name'] = $request->product_name;
       $data['product_details'] = $request->product_details;
       $data['product_category'] = $request->product_category;
       $data['product_subcategory'] = $request->product_subcategory;

       $image = $request->file('product_image');
       if($image){
           $image_name = date('dmy_H_s_i');
           $ext = strtolower($image ->getClientOriginalExtension());
           $image_full_name = $image_name.'.'.$ext; 
           $upload_path = 'public/media/';
           $image_url = $upload_path.$image_full_name;
           $success = $image->move($upload_path,$image_full_name);

           $data['product_image'] = $image_url;
           $product = DB::table('products')->insert($data);
           return redirect()->route('product.index')
                             ->with('success', 'Product Created Successfully');
       }

    }

    public function Edit($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('product.edit',compact('product'));
    }

    public function Update(Request $request, $id){

        $oldimage = $request->old_image;
     
        $data = array();
      
       $data['product_name'] = $request->product_name;
       $data['product_details'] = $request->product_details;
       $data['product_category'] = $request->product_category;
       $data['product_subcategory'] = $request->product_subcategory;
       
       $image = $request->file('product_image');
       if($image){
           unlink($oldimage);
           $image_name = date('dmy_H_s_i');
           $ext = strtolower($image ->getClientOriginalExtension());
           $image_full_name = $image_name.'.'.$ext; 
           $upload_path = 'public/media/';
           $image_url = $upload_path.$image_full_name;
           $success = $image->move($upload_path,$image_full_name);

           $data['product_image'] = $image_url;
           $product = DB::table('products')->where('id',$id)->update($data);
           return redirect()->route('product.index')
                             ->with('success', 'Product Updated Successfully');
       }
    }

    public function Delete($id){
        $data = DB::table('products')->where('id',$id)->first();
        $image = $data-> product_image;
        $product = Product::find($id);
        $product->delete();
        unlink($image);
        $product = DB::table('products')->where('id',$id)->delete();
        return redirect()->route('product.index')
                             ->with('success', 'Product Deleted Successfully');
    }


    public function show($id){

        $data = DB::table('products')->where('id',$id)->first();
        return view('product.show',compact('data'));
    }




}


