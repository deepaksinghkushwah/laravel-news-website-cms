<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['title','alias'];
    public function pages(){
        return $this->belongsToMany(Page::class, "page_tag_relations","tag_id","page_id");
    }
}
