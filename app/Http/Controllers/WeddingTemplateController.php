<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitation_info;
use App\Event;
use App\Template;
use App\Home;
use App\Bride;
use App\Location;
use App\Comment;
use App\Gallery;
use App\Quote;

class WeddingTemplateController extends Controller
{
    
    public function test(){
        $data = Invitation_info::all();
        return view('home', compact('data'));
        
    }

    public function wedding($permalink) {
        $data=Invitation_info::where('permalink','=',$permalink)->leftjoin('templates','templates.id','=','invitation_infos.template_id')->first();
        $view = 'templates.main-template.index';
        
        return view($view,compact('permalink','data'));
    }

    public function ajax($permalink,$template,$partial)
    {
        $data=Invitation_info::where('permalink',$permalink)->first();
        $name_template = Invitation_info::where('permalink','=',$permalink)->leftjoin('templates','templates.id','=','invitation_infos.template_id')->first()->name;
        $event=Event::where('info_id',$data->id)->get();
        $home=Home::where('info_id',$data->id)->get();
        $bride=Bride::where('info_id',$data->id)->get();
        $location=Location::where('info_id',$data->id)->get();
        $comment=Comment::where('info_id',$data->id)->orderBy('id', 'DESC')->get();
        $gallery=Gallery::where('info_id',$data->id)->get();
        $quote=Quote::where('info_id',$data->id)->get();
        $view = 'templates.main-template.'.$partial;
        return view($view,compact('data','event','home','bride','location','comment','gallery','quote', 'name_template'));
        // return view($view,compact('data','event','home'));
        // return view("templates.oreocream.bride");
    }

    public function postcomment(Request $request){
        $name = $request->input('username');
         $comment = $request->input('comment');
         $info_id = $request->input('info_id');
         
         $com = new Comment ; 
         $com->guest_name = $name ; 
         $com->comment = $comment ; 
         $com->info_id = $info_id ; 

         $com->save(); 

        // return "Nama : ".$name.", Komentar : ".$comment;
        return response()->json($com);
    }     
    
}
