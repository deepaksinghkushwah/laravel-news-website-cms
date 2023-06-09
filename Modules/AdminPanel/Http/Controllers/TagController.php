<?php

namespace Modules\AdminPanel\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $tags = Tag::all();
        return view('adminpanel::tag.index',['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('adminpanel::tag.create');
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
            'alias' => 'required',
        ]);

        $validate['alias'] = strtolower(str_replace(" ","-",$validate['alias']));
        Tag::create($validate);
        return redirect()->route("admin.tag.index")->with("success","Tag Created");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('adminpanel::tag.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Tag $tag)
    {
        return view('adminpanel::tag.edit',['item' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Tag $tag)
    {
        $validate = $request->validate([
            'title' => 'required',
            'alias' => 'required',
        ]);

        $tag->alias = $validate['alias'];
        $tag->title = $validate['title'];
        $tag->save();
        return redirect()->route("admin.tag.index")->with("success","Tag updated");
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route("admin.tag.index")->with("success","Tag removed");
    }
}
