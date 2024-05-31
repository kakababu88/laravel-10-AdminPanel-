<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use Session;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','slide');
        $Slides =Slide::get()->toArray();
        // dd($Slides);
        return view('admin.pages.slide')->with(compact('Slides'));

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
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id=null)
    {
        if($id==""){
            $title="Add Slide";
            $slide = new Slide;
            $message = "Slide Added Successfully";
        }else{
            $title="Edit Slide";
            $slide = Slide::find($id);
            $message = "Slide Edit Successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            //CMS page Validation...
            $rules = [
                'title' => 'required',
                'sub_title' => 'required',
                
            ];
            $customMessages = [
                'title.required' => "Title is required",
                'sub_title.required' => "url is required",
            ];

            $this->validate($request,$rules,$customMessages);
            
            $slide->title = $data['title'];
            $slide->sub_title = $data['sub_title'];
            $slide->status=1;
            $slide->save();
            return redirect('admin/slide')->with('success_message', $message );

        }
        return view('admin.pages.add_edit_slide')->with(compact('title','slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
        {
            if($request->ajax()){
                $data = $request->all();
                // echo "<pre>"; print_r($data); die;
                if($data['status']=="Active"){
                    $status = 0;
                }else{
                    $status = 1;
                }
            Slide::where('id',$data['page_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'page_id'=>$data['page_id']]);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Delete Slide
        Slide::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Slide Delete Sucessfully.' );
    }
}

