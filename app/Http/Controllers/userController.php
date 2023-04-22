<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class userController extends Controller
{
    //
    function doner(Request $req ){
        $req->validate([
            'name'=>'required|unique:user',
            'email'=>'required|unique:user',
            'password'=>'required|min:5',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
        $imageName = time().'.'.$req->img->extension();
        $req->img->move(public_path('donerprofile'), $imageName);
        $result = DB::table('user')->insert([
            'name'=>$req->input('name'),
            'email'=>$req->input('email'),
            'password'=>$req->input('password'),
            'profileimg'=>"donerprofile/".$imageName,
        ]);
        $user = DB::table('user')->where('email', $req->input('email'))->first();
        if($result){
            $req->Session()->put('userId',$user->id);
            return redirect('')->with('success','hii there you have successfully registerd');
        }
    }
    function login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required|min:5'
            ]);
            $email = $req->input('email');
            $password = $req->input('password');
            $user = DB::table('user')->where('email', $email)->first();
            
            if(($email == $user->email)&&($password == $user->password)){
                $req->Session()->put('userId',$user->id);
                return redirect('')->with('success','congratuletions you have success-fully logged in');
            }
            
            else{
                return back()->with('fail','there are email or password are incorract');
            }
    }
    function dishupload(Request $req){
        $req->validate([
            'dishName'=>'required',
            'type'=>'required',
            'logi'=>'required',
            'latti'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
        $imageName = time().'.'.$req->img->extension();
        $req->img->move(public_path('images'), $imageName);
        $result = DB::table('products')->insert([
            'dishName'=>$req->input('dishName'),
            'type'=>$req->input('type'),
            'logi'=>$req->input('logi'),
            'latti'=>$req->input('latti'),
            'time'=>Carbon::now(),
            'useless'=>Carbon::now()->addHour(6),
            'userid'=>Session::get('userId'),
            'profile'=>"donermenu/".$imageName,
        ]);
        if($result){
            return redirect('')->with('success','congratuletions you have success-fully logged in');
        }
        
        else{
            return back()->with('fail','there are email or password are incorract');
        }
    }
    function homeImgUpload(Request $req){
        $req->validate([
            'home1'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'home2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'home3'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);
        $imageName1 = time().'.'.$req->home1->extension();
        $req->home1->move(public_path('homeImg1'), $imageName1);
        $imageName2 = time().'.'.$req->home2->extension();
        $req->home2->move(public_path('homeImg2'), $imageName2);
        $imageName3 = time().'.'.$req->home3->extension();
        $req->home3->move(public_path('homeImg3'), $imageName3);
        $result = DB::table('homegallery')->insert([
            'userid'=>Session::get('userId'),
            'home1'=>"homeImg1/".$imageName1,
            'home2'=>"homeImg2/".$imageName2,
            'home3'=>"homeImg3/".$imageName3,
        ]);
        if($result){
            return redirect('')->with('success','congratuletions you have success-fully logged in');
        }
        
        else{
            return back()->with('fail','there are email or password are incorract');
        }

    }
    function home(Request $req){
        $req->validate([
            'logi'=>'required',
            'latti'=>'required',
            'ids'=>'required|unique:newuser',
        ]);
        $result = DB::table('newuser')->insert([
            'name'=>$req->input('ids'),
            'lati'=>$req->input('latti'),
            'logi'=>$req->input('logi'),
        ]);
        $user = DB::table('newuser')->where('name',$req->input('ids'));
        if($result){
            $req->Session()->put('id',$user->id);

            return redirect('findfood')->with('success','congratuletions you have success-fully logged in');
        }
        
        else{
            return back()->with('fail','there are email or password are incorract');
        }
    }
    
}
