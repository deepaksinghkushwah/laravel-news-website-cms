<?php

namespace App\View\Components;

use App\Models\Page;
use App\Models\PageCategories;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestNews extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $news = Page::whereIn("cat_id",PageCategories::getNewsCategories())->orderBy("id", "DESC")->limit(5)->get();
        return view('components.latest-news',['news' => $news]);
    }
}
