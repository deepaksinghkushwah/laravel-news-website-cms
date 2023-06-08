<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(Page $page){
        return view('page.index',['page' => $page]);
    }

    public function storeComment(Request $request, int $pageID = null)
    {
        $validate = $request->validate([
            'page_id' => 'required',
            'content' => 'required'
        ]);

        Comment::create([
            'user_id' => auth()->user()->id,
            'page_id' => $validate['page_id'],
            'content' => $validate['content']
        ]);
        return redirect()->route("page.index",$validate['page_id'])->with("success","Comment saved");
    }
}
