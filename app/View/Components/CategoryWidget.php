<?php

namespace App\View\Components;

use App\Models\PageCategories;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryWidget extends Component
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
        $categories = PageCategories::where("parent_id","=",env('NEWS_CAT_ID'))->get();
        return view('components.category-widget',['categories' => $categories]);
    }
}
