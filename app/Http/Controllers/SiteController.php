<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.main');
    }

    public function form(){
        $nome = 'Luiz';
        return view('site.formUpload', ['nome' => $nome]);
    }
}