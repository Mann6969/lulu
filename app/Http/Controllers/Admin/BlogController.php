<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Blog::join('blog_categories', 'blogs.cid', '=', 'blog_categories.id')
            ->get(['blogs.*', 'blog_categories.name as category']);
        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::select('name', 'id')->get();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => ' required',
            'image' => 'nullable|max:1999',
        ]);

        //Handle file upload
        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload image
            $request->image->move(public_path('files/blogs'), $fileNameToStore);
            // $path = $request->file('image')->public_path('files/blogs', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create new post
        $post = new Blog;
        $post->image = $fileNameToStore;
        $post->blog_title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->editor1;
        if ($request->status) {
            $post->status = $request->status;
        } else {
            $post->status = 0;
        }
        
        $post->posted_by = auth()->user()->id;
        $post->meta_key = $request->meta_key;
        $post->meta_description = $request->meta_description;
        $post->cid = $request->categories[0];
        $post->save();
        
        return redirect(route('blog.index'))->with('message', 'Added Post Successfully!!!!');
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
        $post = Blog::where('id', $id)->first();
        // $tags =tag::all();
        $categories = BlogCategory::all();
        // die(dd($categories[0]->name));
        return view('admin.blog.edit', compact('categories', 'post'));
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
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            // 'body' => 'required',
            'image' => 'nullable|max:1999'
        ]);
        //Handle file upload
        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload image
            $request->image->move(public_path('files/blogs'), $fileNameToStore);
            // $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        //Update file
        $post = Blog::find($id);
        $post->blog_title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        if ($request->status) {
            $post->status = $request->status;
        } else {
            $post->status = 0;
        }
        $post->posted_by = auth()->user()->id;
        $post->meta_key = $request->meta_key;
        $post->meta_description = $request->meta_description;        
        // if ($request->hasFile('image')) {
        //     // Delete the old image if it's changed .
        //     if ($post->image != 'no_image.png') {
        //         Storage::delete('public/images/' . $post->image);
        //     }
            $post->image = $fileNameToStore;
        // }
        $post->cid = $request->categories[0];
        // die(dd($post));
        $post->update();
        return redirect(route('blog.index'))->with('message', 'Updated Post Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id', $id)->delete();
        return redirect(route('blog.index'))->with('message', 'Deleted blog Successfully!!!!');
        // $posts = Blog::find($id);
        // //Delete image from post
        // if ($posts->image != 'noimage.jpg') {
        //     Storage::delete('public/images/' . $posts->image);
        // }
        
    }
}
