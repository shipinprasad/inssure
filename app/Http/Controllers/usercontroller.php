<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\policy;
use App\Models\category;
use App\Models\registrate;
use App\Models\first;
use App\Models\ticket;
use App\Models\appliedpolicy;
use Carbon\Carbon;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        $data['category'] = category::get();
        return view('user.index', $data);
    }
    public function aboutus()
    {
        $data['about'] = about::get();
        return view('user.aboutus', $data);
    }
    public function viewinsurancepolicies()
    {
        $data['policy'] = policy::join('categories', 'categories.id', '=', 'policies.category')
            ->get();
        return view('user.viewinsurancepolicies', $data);
    }
    public function myprofile()
    {
        $id = session('sess');
        $data['registrate'] = registrate::where('id', $id)->get();
        return view('user.myprofile', $data);
    }
    public function myprofileaction(Request $req, $id)
    {

        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $phno = $req->input('phno');
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phno' => $phno
        ];
        registrate::where('id', $id)->update($data);
        return redirect('/myprofile');
    }


    public function appliedinsurancepolicies()
    {
        $id = session('sess');
        $data['result'] = appliedpolicy::join('registrates', 'registrates.id', '=', 'appliedpolicies.userid')
            ->join('policies', 'policies.id', '=', 'appliedpolicies.policiid')
            ->join('categories', 'categories.id', '=', 'policies.category')
            ->where('appliedpolicies.userid', $id)
            ->select(
                'policies.subcategory',
                'policies.policyname',
                'policies.sumassured',
                'policies.premium',
                'policies.tenure',
                'appliedpolicies.idproof',
                'appliedpolicies.photo',
                'appliedpolicies.date',
                'appliedpolicies.status',
                'categories.category'
            )
            ->get();
        return view('user.appliedinsurancepolicies', $data);
    }
    public function apply($id)
    {
        $data['result'] = policy::join('categories', 'categories.id', '=', 'policies.category')
            ->where('policies.id', $id)
            ->get();
        return view('user.apply', $data);
    }
    public function applyaction(Request $req, $id)
    {
        $idproof = $req->file('idproof');
        $idproofs = $idproof->getClientOriginalName();
        $idproof->move(public_path() . '/idproof/', $idproofs);
        $photo = $req->file('photo');
        $photos = $photo->getClientOriginalName();
        $photo->move(public_path() . '/photo/', $photos);
        $userid = session('sess');
        $data = [
            'policiid' => $id,
            'idproof' => $idproofs,
            'photo' => $photos,
            'userid' => $userid,
            'date' => Carbon::now()
        ];
        appliedpolicy::insert($data);
        return redirect('/appliedinsurancepolicies');
    }

    public function tickets()
    {
        return view('user.tickets');
    }
    public function ticketsaction(Request $req)
    {
        $id = session('sess');
        $title = $req->input('title');
        $description = $req->input('description');
        $data = [
            'title' => $title,
            'description' => $description,
            'userid' => $id
        ];
        ticket::insert($data);
        return redirect('/viewticket');
    }
    public function viewticket()
    {
        $id = session('sess');
        $data['ticket'] = ticket::where('userid', $id)->get();
        return view('user.viewticket', $data);
    }
}
