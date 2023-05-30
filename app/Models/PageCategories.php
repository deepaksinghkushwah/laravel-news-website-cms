<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageCategories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'status', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo($this, 'parent_id');
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'cat_id');
    }

    public static function getNewsCategories()
    {
        $cats = PageCategories::where("parent_id", "=", env("NEWS_CAT_ID"))->orderBy("id", "DESC")->get();
        $newsCat = [];
        foreach ($cats as $row) {
            $newsCat[] = $row->id;
        }
        return $newsCat;
    }
}
