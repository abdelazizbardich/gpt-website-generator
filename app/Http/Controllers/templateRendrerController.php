<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class templateRendrerController extends Controller
{


    public function generate(Request $request)
    {
        Log::info($request);
        $url = $request->title . '-' . md5($request->title.rand(1,99999999)) . '.html';
        Website::create([
            "name"=>$request->title,
            "schema"=>$request->all(),
            "template" =>$request->template,
            "url"=> urlencode($url)
        ]);
        return ['url'=>url('render/'.urlencode($url))];
    }
    public function render($url,Request $request)
    {   
        $website = Website::where('url',$url)->first();
        return view('templates.'. $website->template,$website->schema);
    }
}
