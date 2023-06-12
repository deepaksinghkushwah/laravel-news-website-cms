<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageCategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $tagID = $request->input('tag_id');
        $term = $request->input("term");
        $catID = $request->input('cat_id');

        if (!empty($tagID)) {
            $pages = Page::whereHas('tags', function ($query) use ($tagID) {
                $query->where('tags.id', $tagID);
            })->paginate(10);
        } else {
            $query = Page::select('*');
            if (!empty($catID)) {
                $query->where("cat_id", '=', $catID);
            } else {
                $cats = PageCategories::getNewsCategories();
                $query->whereIn("cat_id", $cats);
            }

            if (!empty($term)) {
                $query->where("title", 'like', '%' . $term . '%');
                //$query->orWhere("content", 'like', '%'.$term.'%');
            }
            $pages = $query->orderBy("id", "DESC")->paginate(10);
        }

        /*if (!empty($category)) {
        $pages = Page::where("cat_id", '=', $category->id)->orderBy("id", "DESC")->paginate(10);
        } else {
        $cats = PageCategories::getNewsCategories();
        $pages = Page::whereIn("cat_id", $cats)->orderBy("id", "DESC")->paginate(10);
        }*/

        return view('category.index', ['pages' => $pages]);
    }
}
