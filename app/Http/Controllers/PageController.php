<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteStaticData;

class PageController extends Controller
{
    function home01() 
    {
        $pageData = SiteStaticData::getDefaultData();

        return view('pages.home01', compact('pageData'));
    }
}
