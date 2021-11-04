<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //method
    public function index()
    {
        // return view('pages.index', compact('title'));
        return view('welcome');
    }

    public function master()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web template', 'Programming', 'SEO']
        );
        return view('pages.master')->with($data);
    }
}
