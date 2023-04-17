<?php

namespace App\Http\Controllers;
use App\Models\registrate;
use App\Models\contactu;
use App\Models\first;
use App\Models\about;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
        return view('index.index');
    }
    public function registration()
    {
       return view('index.registration'); 
    }
    public function registrationaction(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $password=$req->input('pwd');
        $phno=$req->input('phno');
        $data=[
            'name'=>$name,
            'email'=>$email,
            'pwd'=>$password,
            'phno'=>$phno
        ];
        registrate::insert($data);
        return redirect('/registration');
    }
    public function viewregistration()
    {
        $data['registrate']=registrate::get();
        return view('index.viewregistration',$data);
    }
    public function contactus()
    {
        return view('index.contactus');
    }
    public function contactusaction(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $password=$req->input('password');
        $message=$req->input('message');
        $data=[
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'message'=>$message
        ];
        contactu::insert($data);
        return redirect('/contactus');
    }
    public function userlogin()
    {
        return view('index.userlogin');
    }
    public function userloginaction( Request $req)
    {
        $email=$req->input('email');
        $password=$req->input('pwd');
        $data=registrate::where('email',$email)->where('pwd',$password)->first();
        if(isset($data))
        {
            $req->session()->put(array('sess'=>$data->id));
            return redirect('/user');
        }
        return redirect('/userlogin');
    } 
    public function aboutus()
    {
        $data['about']=about::get();
        return view('index.aboutus',$data);
    }
}