<?php

namespace App\Http\Controllers;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Show the front news page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('category')->get();
        return view('news', [
            'news' => $news
        ]);
    }

    /**
     * Show the admin news page.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {
        $news = News::all();
        return view('admin.news', [
            'news' => $news
        ]);
    }

    /**
     * Show the admin add news page.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $news = new News();
        $categories = Categories::pluck('libelle', 'id');
        return view('admin.add_news', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    /**
     * Show the admin store news page.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $news = new News(array(
            'title' => $request->get('title'),
            'content'  => $request->get('content'),
            'image'  => "tmp",
            'category_id'  => $request->get('category_id'),
            "author_id" => Auth::id()
        ));
        $news->save();

        $imageName = $news->id . $request->file('image')->getClientOriginalName();

        $news->image = $imageName;
        $news->save();

        $request->file('image')->move(base_path() . '/public/uploads/', $imageName);

        return Redirect::route('admin_news')->with('message', 'Nouvelle ajoutée !');
    }
}
