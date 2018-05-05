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
    public function category()
    {
        return $this->belongsTo('App\Categories', 'category_id');

    }

}
