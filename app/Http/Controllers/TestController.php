<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\input;
use Carbon\Carbon;

class TestController extends Controller
{

    public function input(Request $request)            //data insert to the databse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required|numeric',
            'address' => 'required',
        ]);

        input::insert([
            'name'      =>$request->name,
            'email'     =>$request->email,
            'number'    =>$request->number,
            'address'   =>$request->address,
            'created_at'=>Carbon::now(),
        ]);
        return back();

    }

    public function Userinformation_list()             //view user list
    {
        $lists=input::paginate(5);
        return view('/about',compact('lists'));
    }

    public function single_read($user_id)             //taking the user one by one
    {
       $single_user = input::findOrFail($user_id);
        return view('single_read',compact('single_user'));
    }

    public function update(Request $request)          //user update
    {
        input::findOrFail($request->user_id)->update([
            'name'   =>$request->name,
            'email'  =>$request->email,
            'number' =>$request->number,
            'address'=>$request->address,
            'updated_at'=>Carbon::now(),
        ]);
        return back();
    }

    public function delete($user_id)
    {
        input::findOrFail($user_id)->delete();
        return back();
    }

}
