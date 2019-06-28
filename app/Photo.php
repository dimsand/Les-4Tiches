<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photos';

    protected $fillable = [
        'title', 'description', 'path_image', 'path_image_resize', 'album_id'
    ];

    public function album()
    {
        return $this->belongsTo('App\Album', 'album_id');

    }

}
