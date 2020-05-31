<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'Find the truth';
        return view('pages.index')->with('title', $title);
    }

    public function home() {
        return view('pages.home');
    }

    public function services() {
        $data = array(
            'title' => 'Welcome Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
