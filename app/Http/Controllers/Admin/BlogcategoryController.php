<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\BlogCategory;
class BlogcategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::orderBy('created_at', 'DESC')->get();
        // dd($categories);
        return view('admin.blogcategory.index', compact('categories'));
       
        // return view('admin.blogcategory.index');
        // dd('hy');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd("hello");
        // dd($request);
        // BlogCategory::create(['name'=>request('name')]);
        // return redirect()->back();
        return view('admin.blogcategory.create');
        // dd($request->name);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // BlogCategory::create(['name'=>$request=('name')]);
        // return redirect()->back();
        // dd('hello');

        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
        $category = new BlogCategory;
        $category->name = $request->name;
        $category->category_slug = $request->slug;
        $category->save();
        return redirect(route('blogcategory.index'))->with('message', 'Added Category Successfully!!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $category = BlogCategory::where('id', $id)->first();
        // dd($category);
        return view('admin.blogcategory.edit', compact('category'));
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
        // dd($id);
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
        $category = BlogCategory::find($id);
        $category->name = $request->name;
        $category->category_slug = $request->slug;
        $category->save();

        return redirect(route('blogcategory.index'))->with('message', 'Edited Category Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogCategory::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Deleted Category Successfully!!!!');
    }

    public function getslug(){
        dd('heelo');
        $slug = SlugService::createSlug(BlogCategory::class, 'category_slug',request('name'));
        return response()->json([
            'category_slug'=>$slug
        ]);
    }
}
