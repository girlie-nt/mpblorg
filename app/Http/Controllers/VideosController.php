<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\DB;
use Essence\Essence;

class VideosController extends Controller
{
    public function getVideo(){
    	$lastvid =  DB::table('videos')->orderBy('updated_at', 'desc')->first();
		return view('home',['video'=>$lastvid]);
    }

    public function saveVideo(Request $request){
    	$video = new Video;
    	$video->title = $request->input('title');
    	$video->url = $request->input('url');
    	$video->description = nl2br(htmlentities($request->input('description'), ENT_QUOTES, 'UTF-8'));
    	$video->save();
    	return redirect('/');
    }
}

