<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); 
        return view('index', compact('blogs'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'author' => $request->author,
        ]);

        // dd('Blog created successfully');
        return redirect()->route('home');
    }

    public function show($id){
        $blog = Blog::find($id);
        return view('show', compact('blog'));
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('edit', compact('blog'));
    }

    public function update(Request $request, $id){
        $blog = Blog::find($id);
        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'author' => $request->author,
        ]);

        return redirect()->route('home');
    }

    public function delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('home');
    }
}
