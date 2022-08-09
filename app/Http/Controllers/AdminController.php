<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_role;
use App\Models\user_info;
use App\Models\buyer_info;


class AdminController extends Controller
{

    public function user_list(){
        $contacts = user_info::where('role','=',"2")->get(); 
        $buyers = user_info::leftJoin('buyer_infos','user_infos.id','=','buyer_infos.user_id')->where('role','=',"5")->get();
        $users = user_info::whereNotIn('role','=',"5")->get();
        // dd($buyers);
        $roles = user_role::all();
        return view('user.user_list',compact('roles','contacts','buyers','users'));
    }

    public function add_buyer(Request $request){
        // dd($request->all());

        $user_info = new user_info();
        $user_info->name = $request->buyer_name;
        $user_info->email = $request->buyer_email;
        $user_info->password = $request->buyer_password;
        $user_info->role = $request->buyer_role;
        $user_info->save();

        $buyer_id = user_info::where('email','=',$request->buyer_email)->first()->id;
        $buyer_info = new buyer_info();
        $buyer_info->user_id = $buyer_id;
        $buyer_info->buyer_contact_name = $request->contact_person;
        $buyer_info->buyer_country = $request->buyer_country;
        $buyer_info->save();
        
        return back(); 
    }
    public function add_employee(Request $request){

        $user_info = new user_info();
        $user_info->name = $request->emp_name;
        $user_info->email = $request->emp_email;
        $user_info->password = $request->emp_password;
        $user_info->role = $request->role;
        $user_info->emp_id = $request->employee_id;
        $user_info->save();
        
        return back(); 
    }
}
