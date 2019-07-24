<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'albums';

    protected $fillable = [
        'nom', 'description'
    ];

    public function photos()
    {
        return $this->hasMany('App\Photo', 'album_id');

    }

}
