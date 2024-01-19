<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class templateRendrerController extends Controller
{


    public function generate($template,Request $request)
    {
        $url = $request->title . '-' . md5($request->title.rand(1,99999999)) . '.html';
        Website::create([
            "name"=>$request->title,
            "schema"=>$request->all(),
            "url"=> $url
        ]);
        return url('render/'.$url);
    }
    public function render($url,Request $request)
    {   
        $website = Website::where('url',$url)->first();
        return view('templates.coming-soon',$website->schema);
    }
}
