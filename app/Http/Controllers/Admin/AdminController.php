<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Validator;
use Hash;
use Image;
use Session;


class AdminController extends Controller
{
    public function dashboard(){
        Session::put('page','dashboard');
        return view('admin.dashboard');
    }

    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30'
                
            ];
            $customMessages = [
                'email.required' => "Email is required",
                'email.email' => "valid Email is required",
                'password.required' => "Password is required",
            ];

            $this->validate($request,$rules,$customMessages);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                return redirect("admin/dashboard");
            }
            else{
                return redirect()->back()->with("error_message","Invalid Email or Password");
            }
        }
        return view('admin.login');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }


    public function updateInfo(Request $request){
        Session::put('page','update-info');
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;

            $rules = [
                'admin_name' => 'required|string|max:255',
                'admin_mobile' => 'required|numeric',
                'admin_image'=>'image',
            ];
            $customMessages = [
                'admin_name.required' => "Name is required",
                'admin_name.alpha' => "Valid Name is required",
                'admin_mobile.required' => "Mobile is required",
                'admin_mobile.numeric' => "Valid mobile is required",
                'admin_image.image'=>"Valid Image file is required.",
            ];

            $this->validate($request,$rules,$customMessages);
            //Upload Admin Image
            if($request->hasFile('admin_image')){
                $image_tmp = $request->file('admin_image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $image_path ='admin/images/photos/'.$imageName;
                    Image::make($image_tmp)->save($image_path);
                }
            }else if(!empty($data['current_image'])){
                $imageName =$data['current_image'];
            }else{
                $image_Name="";
            }

            //Admin Info update Details
                Admin::where('email',Auth::guard('admin')->user()->email)->update(['name'=>$data['admin_name'],'image'=>$imageName,'mobile'=>$data['admin_mobile']]);
                return redirect()->back()->with('success_message','Admin Info Update Sucessfully.' );
        }
        return view('admin.update_info');
    }


    public function updatePassword(Request $request){
        Session::put('page','update-password');
        if($request->isMethod('post')){
            $data = $request->all();
            if (Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)){
            // Check New Password & Current Password are Match or Not.
            if($data['new_pwd']==$data['confirm_pwd']){
            //Update Password
            Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_pwd'])]);
            return redirect()->back()->with('success_message','Password Update Sucessfully.' );
            }else{
                return redirect()->back()->with('error_message','Your New password & Confirm password are not Match !' );
            }               
            }else{
                return redirect()->back()->with('error_message','Your Current password is Incurrect!' );
            }
        }
        return view('admin.update_password');
    }

    
    public function checkCurrentPassword(Request $request){
        $data = $request->all();
        if (Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)){
            return "true";
        }else{
            return "false";
        }
    }

    public function profile(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;

            $rules = [
                'admin_name' => 'required|string|max:255',
                'admin_mobile' => 'required|numeric',
                'admin_image'=>'image',
            ];
            $customMessages = [
                'admin_name.required' => "Name is required",
                'admin_name.alpha' => "Valid Name is required",
                'admin_mobile.required' => "Mobile is required",
                'admin_mobile.numeric' => "Valid mobile is required",
                'admin_image.image'=>"Valid Image file is required.",
            ];

            $this->validate($request,$rules,$customMessages);
            //Upload Admin Image
            if($request->hasFile('admin_image')){
                $image_tmp = $request->file('admin_image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $image_path ='admin/images/photos/'.$imageName;
                    Image::make($image_tmp)->save($image_path);
                }
            }

            //Admin Info update Details
                Admin::where('email',Auth::guard('admin')->user()->email)->update(['name'=>$data['admin_name'],'image'=>$imageName,'mobile'=>$data['admin_mobile']]);
                return redirect()->back()->with('success_message','Admin Info Update Sucessfully.' );
        }
        return view('admin.profile');
    }
}
