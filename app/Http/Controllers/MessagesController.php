<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$request->input('name');
    	$this->validate($request, [
    		'name' =>'required',
    		'email' => 'required'
    	]);

    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');
    	$message->save();

    	return redirect('/');
    }

    public function getAllMessages(){
    	$messages = new Message;
    	return view('messages')->with('messages',$messages->all());
    }
}
