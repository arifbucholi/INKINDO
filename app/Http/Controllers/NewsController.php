<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        // dd($news);
        return view('admin.news', compact('news'));
    }

    // Show the form for creating a new news article
    public function create()
    {
        return view('admin.news.create');
    }

    // Store a newly created news article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'seo_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'keywords' => 'nullable|string|max:255',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/images'), $imageName);
            $news->image = 'uploads/images/' . $imageName;
        }

        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    // Show the form for editing the specified news article
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Update the specified news article
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news->title = $request->title;
        $news->content = $request->content;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($news->image) {
                Storage::delete($news->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/images'), $imageName);
            $news->image = 'uploads/images/' . $imageName;
        }

        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    // Remove the specified news article
    public function destroy($id)
    {
        $news = News::find($id);

        if ($news) {
            $news->delete();
            return redirect()->back()->with('success', 'News deleted successfully.');
        }

        return redirect()->back()->with('error', 'News not found.');
    }
}
