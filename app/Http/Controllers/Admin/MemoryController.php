<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memory;
use Validator;
use Image;
use Session;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','memory');
        $Memorys =Memory::get()->toArray();
        // dd($Memory);
        return view('admin.pages.memory.memory')->with(compact('Memorys'));
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
            $title="Add Memory";
            $memory = new Memory;
            $message = "Memory Added Successfully";
        }else{
            $title="Edit Memory";
            $memory = Memory::find($id);
            $message = "Memory Edit Successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'title' => 'required',
                'description' => 'required',              
                'image'=>'image',
            ];
            $customMessages = [
                'title.required' => "Title is required",
                'description.required' => "Description is required",
                'image.image'=>"Valid Image file is required.",
            ];

            $this->validate($request,$rules,$customMessages);
            //Upload Admin Image
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $image_path ='admin/images/memorys/photos/'.$imageName;
                    Image::make($image_tmp)->save($image_path);
                }
            }else if(!empty($data['current_image'])){
                $imageName =$data['current_image'];
            }else{
                $image_Name="";
            }

            $this->validate($request,$rules,$customMessages);
            
            $memory->title = $data['title'];
            $memory->description = $data['description'];
            $memory->image = $imageName;
            $memory->status=1;
            $memory->save();
            return redirect('admin/memory')->with('success_message', $message );

        }
        return view('admin.pages.memory.add_edit_memory')->with(compact('title','memory'));
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

