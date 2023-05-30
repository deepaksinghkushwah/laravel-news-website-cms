<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(PageCategories $category = null)
    {

        if (!empty($category)) {
            $pages = Page::where("cat_id", '=', $category->id)->orderBy("id", "DESC")->paginate(10);
        } else {
            $cats = PageCategories::getNewsCategories();
            $pages = Page::whereIn("cat_id", $cats)->orderBy("id", "DESC")->paginate(10);
        }

        return view('category.index', ['pages' => $pages]);
    }
}
