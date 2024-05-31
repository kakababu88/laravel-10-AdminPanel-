<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Validator;
use Hash;
use Image;
use Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','package');
        $Packages =Package::get()->toArray();
        // dd($Package);
        return view('admin.pages.package.package')->with(compact('Packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id=null)
    {
        if($id==""){
            $title="Add Package";
            $package = new Package;
            $message = "Package Added Successfully";
        }else{
            $title="Edit Package";
            $package = Package::find($id);
            $message = "Package Edit Successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $rules = [
                'title' => 'required',
                'duration' => 'required',
                'description' => 'required',
                'price' => 'required',                
                'image'=>'image',
            ];
            $customMessages = [
                'title.required' => "Title is required",
                'duration.required' => "Duration is required",
                'description.required' => "Description is required",
                'price.required' => "Price is required",
                // 'image.image'=>"Valid Image file is required.",
            ];

            $this->validate($request,$rules,$customMessages);
            //Upload Admin Image
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $image_path ='admin/images/packages/photos/'.$imageName;
                    Image::make($image_tmp)->save($image_path);
                }
            }else if(!empty($data['current_image'])){
                $imageName =$data['current_image'];
            }else{
                $image_Name="";
            }

            $this->validate($request,$rules,$customMessages);
            
            $package->title = $data['title'];
            $package->duration = $data['duration'];
            $package->description = $data['description'];
            $package->price = $data['price'];
            $package->url = $data['url'];
            $package->image = $imageName;
            $package->status=1;
            $package->save();
            return redirect('admin/package')->with('success_message', $message );

        }
        return view('admin.pages.package.add_edit_package')->with(compact('title','package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
