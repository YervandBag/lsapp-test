<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravel';

        // return view('pages.index', compact('title'));
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title = 'This is the about page';

        return view('pages.about', compact('title'));
    }

    public function services() {
        $data = [
            'title' => 'Services Page',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];

        return view('pages.services')->with($data);
    }
}
