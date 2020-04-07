<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='welcome to index';
        $name='ram';
        // return view('pages.index',compact('title','name'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data=array(
            'title'=>'Services are available',
            'services'=> ['web design','programming','seo']
        );
        return view('pages.services')->with($data);
    }
}
