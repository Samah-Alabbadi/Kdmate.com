<?php

namespace App\Http\Controllers;

use App\Http\Requests\createProfileRequest;
use App\Http\Requests\updateProfileRequest;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function create_profile(){

       $profile = User::with(['Profile'=>function($q){
                $q->select('complete_profile','user_id');
            }])->find(Auth::id());


     return view('vendors.create_profile',compact('profile'));
    }
    public function my_profile(){
        $profile = User::with(['Profile'=>function($q){
            $q->select('complete_profile','user_id');
        }])->find(Auth::id());

        return view('vendors.my_profile',compact('profile'));
    }
    public function create_profile_vendor(createProfileRequest $request){


        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = "images/vendorImage/profileUserImage";
        $request->image->move($path,$file_name);


        Profile::create([
            'image'=>$file_name,
            'description' =>$request->description,
            'location'=>$request->location,
            'number'=>$request->number,
            'complete_profile'=> 1,
            'user_id'=>Auth::id(),

        ]);

       return redirect()->route('home');
    }
    public function my_profile_info(){
        $profile = User::with(['Profile'=>function($q){
            $q->select('image','complete_profile','user_id');
        }])->find(Auth::id());

        $info_profile = User::with('Profile')->find(Auth::id());
        return view('vendors.my_profile',compact(['profile','info_profile']));

    }
    public function delete_profile($id){
      $profile = Profile::find($id);
      $profile->delete();
      return redirect()->route('home');
    }

    public function edit_profile(){

        $profile = User::with(['Profile'=>function($q){
            $q->select('id','description','location','number','image','complete_profile','user_id');
        }])->find(Auth::id());

        return view('vendors.edit_profile',compact('profile'));
    }

    public function update_profile(updateProfileRequest $request,$id){

        $profile = Profile::find($id);

      $done= $profile->update([
            'description' =>$request->description,
            'location'=>$request->location,
            'number'=>$request->number,
        ]);

        if($done){
            return redirect()->route('my_profile');
        }else{
            return view('vendor.edit_profile');
        }


    }
}
