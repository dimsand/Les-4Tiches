<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    protected $fillable = [
        'title', 'content', 'image', 'category_id', 'author_id'
    ];

    /**
     * The categories that belong to the project.
     */
    public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id');

    }

}