<?php

namespace App\Http\Controllers;

use App\Album;
use App\Categories;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class PhotosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','add','store']]);
    }

    /**
     * Show the front news page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('admin.photos.index', ['albums'=>$albums]);
    }

    /**
     * Show the admin add photos page.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $album = new Album();
        return view('admin.photos.add', ['album'=>$album]);
    }

    /**
     * Show the admin add photos page.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    public function ajaxAddPhotosInAlbum()
    {

    }
}
