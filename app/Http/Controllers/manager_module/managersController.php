<?php

namespace App\Http\Controllers\manager_module;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\manager_module\Manager;

class managersController extends Controller
{
    public function index(Request $req){
        return view('manager_module.home.index');
    }

    public function showProfile(Request $req){
        $manager = Manager::where('user_name', $req->session()->get('user_name'))->first();
        if(isset($manager)){
            return view('manager_module.profile.index')->with('manager', $manager);
        }else{
            return redirect('/manager/login');
        }
    }

    public function showProfileEdit(Request $req, $id){
        $manager = Manager::find($id);
        if(isset($manager)){
            return view('manager_module.profile.edit')->with('manager', $manager);
        }
        else{
            return redirect('/manager/login');
        }
    }

    public function updateProfile(Request $req){
        $manager = Manager::find($req->session()->get('user_id'));
        $manager->full_name = $req->full_name;
        $manager->company_name = $req->company_name;
        $manager->phone = $req->phone;
        $manager->dob = $req->dob;
        $manager->address = $req->address;
        $manager->city = $req->city;
        $manager->country = $req->country;
        $manager->country = $req->country;

        if($manager->save()){
            $req.session()->flash('msg', '*Updated manager successfully!');
            return redirect('/manager/profile');
        }
        else{
            $req.session()->flash('msg', '*Failed to updated manager!');
            return redirect('/manager/profile');    
        }
    }
}