<?php

namespace Modules\AdminPanel\Http\Controllers;

use App\Models\PageCategories;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categories = PageCategories::withTrashed()->get();
        return view('adminpanel::page-category.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = PageCategories::where("parent_id","=","0")->get();
        return view('adminpanel::page-category.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'parent_id' => 'required',
        ]);
        PageCategories::create([
            "title" => $validate['title'],
            "parent_id" => $validate['parent_id'],
            "status" => $validate['status']
        ]);
        return redirect()->route('admin.page-category.index')->with('success','Category created');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('adminpanel::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(PageCategories $category)
    {
        $categories = PageCategories::where("parent_id","=","0")->get();
        return view('adminpanel::page-category.edit',['category' => $category,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, PageCategories $category)
    {
        $validate = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'parent_id' => 'required',
        ]);

        $category->title = $validate['title'];
        $category->status = $validate['status'];
        $category->parent_id = $validate['parent_id'];
        $category->save();
        return redirect()->route('admin.page-category.index')->with('success','Category updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(PageCategories $category)
    {
        $category->delete();
        return redirect()->route('admin.page-category.index')->with('success','Category deleted');
    }
}
