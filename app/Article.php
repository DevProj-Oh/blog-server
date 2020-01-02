<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Article extends Model
{
    protected $fillable = ['category_id', 'title', 'descript', 'html_content', 'markdown_content'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'articles_and_roles', 'article_id', 'tag_id');
    }

    public function setMarkdownContentAttribute($markdownContent)
    {
        $parsedown = new Parsedown();
        $this->attributes['html_content'] = $parsedown->text($markdownContent);
        $this->attributes['markdown_content'] = $markdownContent;
    }
}
