<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newBlogModel;
use Carbon\Carbon; 

class NewsBlogController extends Controller
{

    public function create()
    {
        $newsBlog = new newBlogModel;
        $title = "Add Blog";
        $url = url('/Admin/addBlog');
        $newsBlogs = compact('newsBlog', 'title', 'url');
        return view('Admin/addBlog')->with($newsBlogs);
    }


    public function insert(Request $request)
    {  $request->validate([
        'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

        $newsBlog = new newBlogModel;
        $newsBlog->blog_title = $request->input('blog_title');
        $newsBlog->blog_desc = $request->input('blog_desc');
        $newsBlog->blog_italic = $request->input('blog_italic');
        $newsBlog->first_paragraph = $request->input('first_paragraph');
        $newsBlog->second_paragraph = $request->input('second_paragraph');
        $newsBlog->third_paragraph = $request->input('third_paragraph');
        $newsBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $newsBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $newsBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $newsBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $newsBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $newsBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $newsBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $newsBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $newsBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $newsBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $newsBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $newsBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $newsBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $newsBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $newsBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $newsBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $newsBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $newsBlog->first_images = $request->input('first_images');
        $newsBlog->second_images = $request->input('second_images');

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesurl = time() . '_' . $images->getClientOriginalName();
            $newsBlog->images = $images->storeAs('public/artic', $imagesurl);
        }             

        $newsBlog->save();
        return redirect('/Admin/viewBlog');
    }

    public function viewBlog()
    {
        $newsBlog = newBlogModel::all();
        $newsBlogs = compact('newsBlog');
        return view('Admin.viewBlog')->with($newsBlogs);
    }


    public function editBlog($id)
    {
        $newsBlog = newBlogModel::find($id);
        if (is_null($newsBlog)) {
            return redirect('/Admin/viewBlog');
        } else {
            $title = "edit blog";
            $url = url('/Admin/updateBlog') . "/" . $id;
            $newsBlogs = compact('newsBlog', 'title', 'url');
            return view('Admin/addBlog')->with($newsBlogs);
        }
    }
    public function updateBlog($id, Request $request)
    {
        $newsBlog = newBlogModel::find($id);
        $newsBlog->blog_title = $request->input('blog_title');
        $newsBlog->blog_desc = $request->input('blog_desc');
        $newsBlog->blog_italic = $request->input('blog_italic');
        $newsBlog->first_paragraph = $request->input('first_paragraph');
        $newsBlog->second_paragraph = $request->input('second_paragraph');
        $newsBlog->third_paragraph = $request->input('third_paragraph');
        $newsBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $newsBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $newsBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $newsBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $newsBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $newsBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $newsBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $newsBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $newsBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $newsBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $newsBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $newsBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $newsBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $newsBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $newsBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $newsBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $newsBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $newsBlog->first_images = $request->input('first_images');
        $newsBlog->second_images = $request->input('second_images');
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesURL = time() . '_' . $images->getClientOriginalName();
            $newsBlog->images = $images->storeAs('public/article', $imagesURL);
        }
        $newsBlog->save();
        return redirect('/Admin/viewBlog');
    }

    public function deleteBlog($id)
    {
        newBlogModel::find($id)->delete();
        return redirect()->back();
    }

    // sub admin
    public function createSbBlog()
    {
        $newsBlog = new newBlogModel;
        $title = "Add Blog(sb)";
        $url = url('/Sub-admin/addBlog');
        $newsBlogs = compact('newsBlog', 'title', 'url');
        return view('Sub-admin/Add-blog')->with($newsBlogs);
    }


    public function insertSbBlog(Request $request)
    {
        $newsBlog = new newBlogModel;
        $newsBlog->blog_title = $request->input('blog_title');
        $newsBlog->blog_desc = $request->input('blog_desc');
        $newsBlog->blog_italic = $request->input('blog_italic');
        $newsBlog->first_paragraph = $request->input('first_paragraph');
        $newsBlog->second_paragraph = $request->input('second_paragraph');
        $newsBlog->third_paragraph = $request->input('third_paragraph');
        $newsBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $newsBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $newsBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $newsBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $newsBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $newsBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $newsBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $newsBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $newsBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $newsBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $newsBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $newsBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $newsBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $newsBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $newsBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $newsBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $newsBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $newsBlog->first_images = $request->input('first_images');
        $newsBlog->second_images = $request->input('second_images');
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesURL = time() . '_' . $images->getClientOriginalName();
            $newsBlog->images = $images->storeAs('public/article', $imagesURL);
        }
        $newsBlog->save();
        return redirect('/Sub-admin/viewBlog');
    }


    public function viewSbBlog()
    {
        $newsBlog = newBlogModel::all();
        $newsBlogs = compact('newsBlog');
        return view('Sub-admin.viewBlog')->with($newsBlogs);
    }

    public function editSbBlog($id)
    {
        $newsBlog = newBlogModel::find($id);
        if (is_null($newsBlog)) {
            return redirect('/Sub-admin/viewBlog');
        } else {
            $title = "edit blog";
            $url = url('/Sub-admin/updateBlog') . "/" . $id;
            $newsBlogs = compact('newsBlog', 'title', 'url');
            return view('Sub-admin/Add-blog')->with($newsBlogs);
        }
    }
    public function updateSbBlog($id, Request $request)
    {
        $newsBlog = newBlogModel::find($id);
        $newsBlog->blog_title = $request->input('blog_title');
        $newsBlog->blog_desc = $request->input('blog_desc');
        $newsBlog->blog_italic = $request->input('blog_italic');
        $newsBlog->first_paragraph = $request->input('first_paragraph');
        $newsBlog->second_paragraph = $request->input('second_paragraph');
        $newsBlog->third_paragraph = $request->input('third_paragraph');
        $newsBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $newsBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $newsBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $newsBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $newsBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $newsBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $newsBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $newsBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $newsBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $newsBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $newsBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $newsBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $newsBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $newsBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $newsBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $newsBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $newsBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $newsBlog->first_images = $request->input('first_images');
        $newsBlog->second_images = $request->input('second_images');
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesURL = time() . '_' . $images->getClientOriginalName();
            $newsBlog->images = $images->storeAs('public/article', $imagesURL);
        }
        $newsBlog->save();
        return redirect('/Sub-admin/viewBlog');
    }


    public function deleteSbBlog($id)
    {
        newBlogModel::find($id)->delete();
        return redirect()->back();
    }

    public function viewcontactexperts()
    {
        $newsBlog = newBlogModel::inRandomOrder()->take(3)->get();
        $newsBlogs = compact('newsBlog');
        return view('contact-experts')->with($newsBlogs);
    }


    public function indexcontactexperts()
    {
        $indexnewsBlog = newBlogModel::inRandomOrder()->take(1)->get();
        $indexnewsBlogs = compact('indexnewsBlog');
        return view('contact-experts')->with($indexnewsBlogs);
    }


    public function viewpostarticle()
    {
        $newsBlog = newBlogModel::all();
        $newsBlogs = compact('newsBlog');
        return view('posts-article')->with($newsBlogs);
    }

//     public function viewpostarticle()
// {
//     $allNewsBlogs = newBlogModel::all();
//     $newsBlogsForForm = $allNewsBlogs->filter(function ($newsBlog) {
//         return $newsBlog->created_at->format('Y-m-d') === '2024-03-08';
//     });
    
//     return view('posts-article', ['newsBlogsForForm' => $newsBlogsForForm]);
// }
}
