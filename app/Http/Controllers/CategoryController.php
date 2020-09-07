<?php

namespace App\Http\Controllers;
use App\Item;
use App\Brand;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
       return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         

       $categories=Category::all();

       return view('backend.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([ 
            "name"=>'required',
            "photo"=>'required|image'
        ]);

    
     $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/categoryimg'),$imageName);

        $path ='backend/categoryimg/'.$imageName;
        $category=new Category;
        $category->name=$request->name;
        $category->photo=$path;
        $category->save();
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('backend.categories.detail',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
         $categories=Category::all();
        return view('backend.categories.edit',compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([ 
            
            "name"=>'required',
            "photo"=>'sometimes',
            "oldphoto"=>'required',
            
            ]);

        if ($request->hasFile('photo')) {

            $imageName=time().'.'.$request->photo->extension();

                $request->photo->move(public_path('backend/categoryimg'),$imageName);

                $path ='backend/categoryimg/'.$imageName;

        }else{
            $path=$request->oldphoto;
        }

         $category->name=$request->name;
        $category->photo= $path;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}
