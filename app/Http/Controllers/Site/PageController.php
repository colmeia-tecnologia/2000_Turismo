<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($title)
    {
        if($title == 'catalogo')
            return redirect()->route('catalogo');
        
        return view('site.page.index');
    }
}
