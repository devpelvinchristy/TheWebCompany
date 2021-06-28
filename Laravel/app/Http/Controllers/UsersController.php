<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\MainCategory;


class UsersController extends Controller
{
    Public function index(){
        $categories = DB::table('main_categories')
                        ->select('main_categories.id', 'main_categories.maincategory')
                        ->get();
        return view('users.user', ['categories'=>$categories]);
    }

    public function productscategory(Request $request){
        

    }

    
}
