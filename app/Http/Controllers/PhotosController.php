<?php

namespace App\Http\Controllers;

use App\Album;
use App\Categories;
use App\News;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class PhotosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','add','store','photos']]);
    }

    /**
     * Show all albums
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::with('photos')->get();
        return view('albums', ['albums' => $albums]);
    }

    /**
     * Show the photos of the album with this slug
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function photos($slug)
    {
        $album = Album::where('slug',$slug)->with('photos')->first();
        $othersAlbums = Album::where('slug','<>',$slug)->with('photos')->get();
        return view('photos', ['album' => $album, 'othersAlbums' => $othersAlbums]);
    }

    /**
     * Show the front news page.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
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
    public function addImages($albumId)
    {
        $photos = Photo::where('album_id','=',$albumId)->get();
        return view('admin.photos.add_photos', ['photos'=>$photos, 'albumId' => $albumId]);
    }

    /**
         * Show the admin add album page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Création du nouvel album
        $album = new Album();
        $album->title = $request->get('title');
        $album->slug = $this->slugify($request->get('title'));
        $album->description = $request->get('description');
        $album->actived = $request->get('actived');
        $album->save();
        return Redirect::route('admin_add_images', [$album->id])->with('message', 'Nouvelle ajoutée !');
    }

    /**
     * Generate a slug
     *
     * @param $text
     * @return mixed|string
     */
    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, '-');
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    /**
     * Show the admin add photos page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeImages(Request $request)
    {
        $albumId = $request->get('album_id');
        $images = $request->file('file');

        if (!is_array($images)) {
            $images = [$images];
        }

        if (!is_dir(env('GALLERIES_FOLDER'))) {
            mkdir(env('GALLERIES_FOLDER'), 0777);
        }

        for ($i = 0; $i < count($images); $i++) {
            $image = $images[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $image->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '_resized' . '.' . $image->getClientOriginalExtension();

            Image::make($image)
                ->resize(200, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->orientate()
                ->save(env('GALLERIES_FOLDER') . '/' . $resize_name);

            $image->move(env('GALLERIES_FOLDER'), $save_name);

            $photo = new Photo();
            $photo->title = "notitle";
            $photo->path_image = $save_name;
            $photo->path_image_resize = $resize_name;
            $photo->album_id = $albumId;
            $photo->save();
        }
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);

    }

    /**
     * Suppression de l'album, et des images associées
     * 
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteAlbum($id)
    {
        $photos = Photo::where('album_id', $id);
        $imagesToSupp = $photos->get();
        foreach ($imagesToSupp as $image) {
            if(is_file(env('GALLERIES_FOLDER') . '/' . $image->path_image)){
                unlink(env('GALLERIES_FOLDER') . '/' . $image->path_image);
            }
            if(is_file(env('GALLERIES_FOLDER') . '/' . $image->path_image_resize)){
                unlink(env('GALLERIES_FOLDER') . '/' . $image->path_image_resize);
            }
        }
        $photos->delete();
        $album = Album::findOrFail($id);
        $album->delete();
        return Redirect::route('admin_photos')->with('message', 'L\'album a bien été supprimé.');
    }
}
