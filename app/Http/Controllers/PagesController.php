<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $home_page = Site::where('page_name', 'page_home')->get();

        return view('index', ['home_page' => $home_page]);
    }

    public function management()
    {
        return view('pages/management');
    }

    public function bhrau()
    {
        $bhrau_page = Site::where('page_name', 'page_bhrau')->get();

        return view('pages/bhrau', ['bhrau_page' => $bhrau_page]);
    }

    public function joinNow()
    {
        $join_now_page = Site::where('page_name', 'page_join_now')->get();

        return view('pages/joinNow', ['join_now_page' => $join_now_page]);
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function donateNow()
    {
        $donate_now_page = Site::where('page_name', 'page_donate_now')->get();

        return view('pages/donateNow', ['donate_now_page' => $donate_now_page]);
    }

    public function presidentsMessage()
    {
        return view('pages.presidents-msg');
    }

    public function newsUpdates()
    {
        return view('pages.news-updates');
    }

    public function moreTopics()
    {
        $more_topics_page = Site::where('page_name', 'page_more_topics')->get();

        return view('pages/moreTopics', ['more_topics_page' => $more_topics_page]);
    }
}
