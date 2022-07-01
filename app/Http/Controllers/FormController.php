<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductType;

class PageController extends Controller
{
    public function getIndex()
    {
       
        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>', 0) -> paginate(4);
        $new_promotion = Product::where('promotion_price', '<>', 0) ->get();
        // $top_product = Product::where('top',1)->paginate(8);                                 
        //dd($new_product);                                 
            
       
        return view('page.trangchu', compact( 'new_product','sanpham_khuyenmai'));
    }
    public function getIndexAdmin(){
        $products = Product ::all();
        return view('pageadmin.admin', compact('products')); 
    }
    public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type', $type)->get();
    
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);

        return view('page.loai_sanpham', compact('sp_theoloai', 'type_product', 'sp_khac'));
    }
    // public function getDetail(Request $request){
    //     $sanpham = Product::where('id',$request->id)->first();
    //     $splienquan=Product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type,)->paginate(3);
    //     return view('page.Detail',compact('sanpham','splienquan','comments'));
    // }
}