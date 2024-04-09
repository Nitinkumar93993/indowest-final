<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\ArticleModel;
use App\Models\ArticleModel;
use Carbon\Carbon; 

class ArticleController extends Controller
{

    public function create()
    {
        $articleBlog = new ArticleModel;
        $title = "Add Blog";
        $url = url('/Admin/addArticle');
        $articleBlogs = compact('articleBlog', 'title', 'url');
        return view('Admin/article')->with($articleBlogs);
    }


    public function insert(Request $request)
    {  $request->validate([
        'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

        $articleBlog = new ArticleModel;
        $articleBlog->blog_title = $request->input('blog_title');
        $articleBlog->blog_desc = $request->input('blog_desc');
        $articleBlog->blog_italic = $request->input('blog_italic');
        $articleBlog->first_paragraph = $request->input('first_paragraph');
        $articleBlog->second_paragraph = $request->input('second_paragraph');
        $articleBlog->third_paragraph = $request->input('third_paragraph');
        $articleBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $articleBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $articleBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $articleBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $articleBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $articleBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $articleBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $articleBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $articleBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $articleBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $articleBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $articleBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $articleBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $articleBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $articleBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $articleBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $articleBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $articleBlog->first_images = $request->input('first_images');
        $articleBlog->second_images = $request->input('second_images');

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesurl = time() . '_' . $images->getClientOriginalName();
            $articleBlog->images = $images->storeAs('public/newsa', $imagesurl);
        }             

        $articleBlog->save();
        return redirect('/Admin/viewArticle');
    }

    public function viewBlog()
    {
        $articleBlog = ArticleModel::all();
        $articleBlogs = compact('articleBlog');
        return view('Admin.viewArticle')->with($articleBlogs);
    }


    public function editBlog($id)
    {
        $articleBlog = ArticleModel::find($id);
        if (is_null($articleBlog)) {
            return redirect('/Admin/viewArticle');
        } else {
            $title = "edit blog";
            $url = url('/Admin/updateArticle') . "/" . $id;
            $articleBlogs = compact('articleBlog', 'title', 'url');
            return view('Admin/article')->with($articleBlogs);
        }
    }
    public function updateBlog($id, Request $request)
    {
        $articleBlog = ArticleModel::find($id);
        $articleBlog->blog_title = $request->input('blog_title');
        $articleBlog->blog_desc = $request->input('blog_desc');
        $articleBlog->blog_italic = $request->input('blog_italic');
        $articleBlog->first_paragraph = $request->input('first_paragraph');
        $articleBlog->second_paragraph = $request->input('second_paragraph');
        $articleBlog->third_paragraph = $request->input('third_paragraph');
        $articleBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $articleBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $articleBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $articleBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $articleBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $articleBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $articleBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $articleBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $articleBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $articleBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $articleBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $articleBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $articleBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $articleBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $articleBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $articleBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $articleBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $articleBlog->first_images = $request->input('first_images');
        $articleBlog->second_images = $request->input('second_images');
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesURL = time() . '_' . $images->getClientOriginalName();
            $articleBlog->images = $images->storeAs('public/newsa', $imagesURL);
        }
        $articleBlog->save();
        return redirect('/Admin/viewArticle');
    }

    public function deleteBlog($id)
    {
        ArticleModel::find($id)->delete();
        return redirect()->back();
    }



    // sub admin
    public function createSbBlog()
    {
        $articleBlog = new ArticleModel;
        $title = "Add Blog(sb)";
        $url = url('/Sub-admin/Article');
        $articleBlogs = compact('articleBlog', 'title', 'url');
        return view('Sub-admin/article')->with($articleBlogs);
    }


    public function insertSbBlog(Request $request)
    {
        $articleBlog = new ArticleModel;
        $articleBlog->blog_title = $request->input('blog_title');
        $articleBlog->blog_desc = $request->input('blog_desc');
        $articleBlog->blog_italic = $request->input('blog_italic');
        $articleBlog->first_paragraph = $request->input('first_paragraph');
        $articleBlog->second_paragraph = $request->input('second_paragraph');
        $articleBlog->third_paragraph = $request->input('third_paragraph');
        $articleBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $articleBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $articleBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $articleBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $articleBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $articleBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $articleBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $articleBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $articleBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $articleBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $articleBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $articleBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $articleBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $articleBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $articleBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $articleBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $articleBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $articleBlog->first_images = $request->input('first_images');
        $articleBlog->second_images = $request->input('second_images');
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesURL = time() . '_' . $images->getClientOriginalName();
            $articleBlog->images = $images->storeAs('public/newsa', $imagesURL);
        }
        $articleBlog->save();
        return redirect('/Sub-admin/viewArticle');
    }


    public function viewSbBlog()
    {
        $articleBlog = ArticleModel::all();
        $articleBlogs = compact('articleBlog');
        return view('Sub-admin.viewArticle')->with($articleBlogs);
    }

    public function editSbBlog($id)
    {
        $articleBlog = ArticleModel::find($id);
        if (is_null($articleBlog)) {
            return redirect('/Sub-admin/viewArticle');
        } else {
            $title = "edit blog";
            $url = url('/Sub-admin/updateArticle') . "/" . $id;
            $articleBlogs = compact('newsBlog', 'title', 'url');
            return view('Sub-admin/article')->with($articleBlogs);
        }
    }
    public function updateSbBlog($id, Request $request)
    {
        $articleBlog = ArticleModel::find($id);
        $articleBlog->blog_title = $request->input('blog_title');
        $articleBlog->blog_desc = $request->input('blog_desc');
        $articleBlog->blog_italic = $request->input('blog_italic');
        $articleBlog->first_paragraph = $request->input('first_paragraph');
        $articleBlog->second_paragraph = $request->input('second_paragraph');
        $articleBlog->third_paragraph = $request->input('third_paragraph');
        $articleBlog->fourth_paragraph = $request->input('fourth_paragraph');
        $articleBlog->fifth_paragraph = $request->input('fifth_paragraph');
        $articleBlog->sixth_paragraph = $request->input('sixth_paragraph');
        $articleBlog->seventh_paragraph = $request->input('seventh_paragraph');
        $articleBlog->eighth_paragraph = $request->input('eighth_paragraph');
        $articleBlog->ninth_paragraph = $request->input('ninth_paragraph');
        $articleBlog->tenth_paragraph = $request->input('tenth_paragraph');
        $articleBlog->eleventh_paragraph = $request->input('eleventh_paragraph');
        $articleBlog->twelveth_paragraph = $request->input('twelveth_paragraph');
        $articleBlog->thirteen_paragraph = $request->input('thirteen_paragraph');
        $articleBlog->fourteen_paragraph = $request->input('fourteen_paragraph');
        $articleBlog->fifteen_paragraph = $request->input('fifteen_paragraph');
        $articleBlog->sixteen_paragraph = $request->input('sixteen_paragraph');
        $articleBlog->seventeen_paragraph = $request->input('seventeen_paragraph');
        $articleBlog->eighteen_paragraph = $request->input('eighteen_paragraph');
        $articleBlog->nineteen_paragraph = $request->input('nineteen_paragraph');
        $articleBlog->twenteen_paragraph = $request->input('twenteen_paragraph');
        $articleBlog->first_images = $request->input('first_images');
        $articleBlog->second_images = $request->input('second_images');
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesURL = time() . '_' . $images->getClientOriginalName();
            $articleBlog->images = $images->storeAs('public/newsa', $imagesURL);
        }
        $articleBlog->save();
        return redirect('/Sub-admin/viewArticle');
    }


    public function deleteSbBlog($id)
    {
        ArticleModel::find($id)->delete();
        return redirect()->back();
    }

    // public function viewcontactexperts()
    // {
    //     $articleBlog = ArticleModel::inRandomOrder()->take(3)->get();
    //     $articleBlogs = compact('newsBlog');
    //     return view('contact-experts')->with($articleBlogs);
    // }


    // public function indexcontactexperts()
    // {
    //     $indexnewsBlog = ArticleModel::inRandomOrder()->take(1)->get();
    //     $indexnewsBlogs = compact('indexnewsBlog');
    //     return view('contact-experts')->with($indexnewsBlogs);
    // }


    public function viewpostarticle()
    {
        $articleBlog = ArticleModel::all();
        $articleBlogs = compact('articleBlog');
        return view('posts-article')->with($articleBlogs);
    }

//     public function viewpostarticle()
// {
//     $allNewsBlogs = ArticleModel::all();
//     $articleBlogsForForm = $allNewsBlogs->filter(function ($articleBlog) {
//         return $articleBlog->created_at->format('Y-m-d') === '2024-03-08';
//     });
    
//     return view('posts-article', ['newsBlogsForForm' => $articleBlogsForForm]);
// }
}
