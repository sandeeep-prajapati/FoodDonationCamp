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
            return redirect('')->with('success','नमस्ते, अब आप भूख के लिए व्यंजन अपलोड कर सकते हैं');
        }
        else{
            return back()->with('fail','नमस्ते लेकिन भूखे लोगों के लिए व्यंजनों को ऑनलाइन अपलोड करने में कुछ समस्या है');
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
                return redirect('')->with('success','नमस्ते, अब आप भूख के लिए व्यंजन अपलोड कर सकते हैं');
            }
            
            else{
                return back()->with('fail','नमस्ते, लेकिन भूखे लोगों के लिए व्यंजनों को ऑनलाइन अपलोड करने में कुछ समस्या है');
            }
    }
    function dishupload(Request $req){
        $req->validate([
            'dishName'=>'required',
            'type'=>'required',
            'logi'=>'required',
            'latti'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'home1'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'home2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'home3'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
        $imageName1 = time().'.'.$req->home1->extension();
        $req->home1->move(public_path('homeImg1'), $imageName1);
        $imageName2 = time().'.'.$req->home2->extension();
        $req->home2->move(public_path('homeImg2'), $imageName2);
        $imageName3 = time().'.'.$req->home3->extension();
        $req->home3->move(public_path('homeImg3'), $imageName3);
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
            'someOneComming'=>1,
            'home1'=>"homeImg1/".$imageName1,
            'home2'=>"homeImg2/".$imageName2,
            'home3'=>"homeImg3/".$imageName3,
        ]);
        if($result){
            return redirect('')->with('success','नमस्ते आपने भूखे लोगों के लिए सफलतापूर्वक एक व्यंजन जोड़ा है');
        }
        
        else{
            return back()->with('fail','भूखे लोगों के लिए ऑनलाइन डिश अपलोड करने में कुछ त्रुटियाँ हैं');
        }
    }
    // function homeImgUpload(Request $req){
    //     $req->validate([
    //         'home1'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
    //         'home2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
    //         'home3'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
    //     ]);
    //     $imageName1 = time().'.'.$req->home1->extension();
    //     $req->home1->move(public_path('homeImg1'), $imageName1);
    //     $imageName2 = time().'.'.$req->home2->extension();
    //     $req->home2->move(public_path('homeImg2'), $imageName2);
    //     $imageName3 = time().'.'.$req->home3->extension();
    //     $req->home3->move(public_path('homeImg3'), $imageName3);
    //     $result = DB::table('homegallery')->insert([
    //         'userid'=>Session::get('userId'),
    //         'home1'=>"homeImg1/".$imageName1,
    //         'home2'=>"homeImg2/".$imageName2,
    //         'home3'=>"homeImg3/".$imageName3,
    //     ]);
    //     if($result){
    //         return redirect('')->with('success','नमस्ते आपने अपने घर की तस्वीरें सफलतापूर्वक अपलोड कर ली हैं जो भूखे लोगों को आपके दरवाजे पर लाएगी');
    //     }
        
    //     else{
    //         return back()->with('fail','आपके घर की तस्वीरें अपलोड करने के लिए यहां कुछ त्रुटि हैं जो भूखे लोगों को आपके घर लाने में मदद करेंगी');
    //     }

    // }
    function home(Request $req){
        $req->validate([
            'logi'=>'required',
            'latti'=>'required',
            'ids'=>'required',
        ]);
        $result = DB::table('newuser')->insert([
            'name'=>$req->input('ids'),
            'lati'=>$req->input('latti'),
            'logi'=>$req->input('logi'),
        ]);
        $latti = $req->input('latti');
        $compLatti =round($latti,5);
        $logi = $req->input('logi');
        $compLogi =round($logi,5);
         if($result){
         $user1 = DB::table('products')->where('latti','>',$compLatti-0.00001)->where('latti','<',$compLatti+0.00001)->where('logi', '>',$compLogi-0.001)->where('logi','<',$compLogi+0.001)->where('useless','>',Carbon::now())->get();
             return view('findfood',['data'=>$user1]);
            // return $user1;
        }
        
         else{
             return back()->with('fail','there are email or password are incorract');
         }
        //return $user1;
    }
    function logOut(Request $req){
        if(Session::has('userid')){
            Session::pull('userid');
            return redirect('login')->with('fail','you have to login here first');
        }
    }
    
}
