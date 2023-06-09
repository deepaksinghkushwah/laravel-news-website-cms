<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['cat_id','title','content','description','keywords','image'];

    public function category(){
        return $this->belongsTo(PageCategories::class,'cat_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, "page_id");
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, "page_tag_relations","page_id","tag_id");
    }
}
