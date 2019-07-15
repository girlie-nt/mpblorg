<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Video;
use App\Team;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
   	public function login(Request $request){
   		$user = new User;
   		$logged_in = false;
   		if(null !== $request->input('username')){
            $theuser = $user->where('name','=',$request->input('username'))->where('password','=',$request->input('password'))->get();
            
            if(count($theuser) != 0)
            	$logged_in = true;
   		}

   		if($logged_in){
   			$data['videos'] = $this->getVideos();
   			$data['team'] = $this->getTeams();
   			return view('admin/dashboard')->with('data',$data);
   		}
   		else
    		return view('admin/login');
   }

   	public function getVideos(){
   		$video = new Video;
   		return $video->all();
   	}

   	public function getTeams(){
   		$team = new Team;
   		return $team->all();
   	}
}
