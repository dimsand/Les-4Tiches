<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the front news page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
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
}
