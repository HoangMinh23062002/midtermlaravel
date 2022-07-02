<?php

namespace App\Http\Controllers;
use App\Models\food;
use App\Models\Category;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods =Category::find(1)->Resaurant()->get();
        $food2 =Category::find(2)->Resaurant()->get();
        $food3 =Category::find(3)->Resaurant()->get();

        return view('showall',compact('foods','food2','food3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create',['res'=> Category::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $name='';
        
        $validated = $request->validate([
            'description' => 'required',
            'name' => 'required',
            'amount' => 'required',
            'image' => 'required',
           
        ],[
                'description.required' => 'Chưa nhập mô tả',
                'name.required' => 'Chưa nhập mô tả',
                'image.required' => 'Chưa nhập mô tả',
                'amount.required' => 'Chưa nhập mô tả',
                
        ]);
        if($request -> hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb',
            ]);
            $file = $request->file('image');
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images');
            $file -> move($destinationPath, $name);
        }
        
        $res = new food();
        $res -> description=$request->description;
        $res->name = $request -> name;
        $res->price = $request -> amount;
        $res->category_id = $request->category_id;
        $res -> image = $name;
        $res -> save();
        
        return redirect()-> route('minh.index')->with('success', 'Bạn đã Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = food::find($id);
        return view('detail',['fo'=>$food]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
