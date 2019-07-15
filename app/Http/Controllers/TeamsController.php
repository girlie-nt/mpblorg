<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    public function saveTeam(Request $request){
    	$this->validate($request, [
    		'name' =>'required',
    		'description' => 'required'
    	]);
    	$team = new Team;
    	$team->name = $request->input('name');
    	$team->description = nl2br(htmlentities($request->input('description'), ENT_QUOTES, 'UTF-8'));
    	$team->facebook = $request->input('facebook');
    	$team->twitter = $request->input('twitter');
    	$team->instagram = $request->input('instagram');
    	$team->save();
        redirect('/addteam');

            
    	redirect('/addteam');
    }

    public function getTeam($id=''){
    	$team = new Team;
    	if($id == 'all' || $id == ''){
    		$all = $team->orderBy('orderin','asc')->get();
            $photos = DB::table('team_photos')->get();
            $data = $this->getTeamwithPhotos($all,$photos);
    	}else{
            // var_dump($id);
            // DB::enableQueryLog();
    		$data =  $team->where('id', $id)->get();
            $query = DB::getQueryLog();
            $query = end($query);
            // print_r($query);
            // var_dump(count($data));
    	}
    	return view('team')->with('team',$data);
    }

    public function getTeamwithPhotos($team, $photos){
        $newdata = [];
        foreach ($team as $value) {
                $teamphotos = [];
            foreach ($photos as $key) {
                if($value->id == $key->team_id){
                    array_push($teamphotos, $key->photo);
                }
            }
            $value->photos = $teamphotos;
            array_push($newdata, $value);
        }
        return $newdata;
    }

    public function orderteam(Request $request){
        $team = new Team;
        if(null !== $request->input('orderby')){
            foreach ($request->input('orderby') as $key => $value) {
               $theteam = $team->where('id','=',$key)->update(array('orderin'=>$value));
            }
            redirect('/orderteam');
        }
        $all = $team->orderBy('orderin','asc')->get();
        return view('orderteam')->with('team',$all);
    }
}
