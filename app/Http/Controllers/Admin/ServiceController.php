<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','service');
        $Services =Service::get()->toArray();
        // dd($Slides);
        return view('admin.pages.service.service')->with(compact('Services'));

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
            $title="Add service";
            $service = new Service;
            $message = "Service Added Successfully";
        }else{
            $title="Edit Service";
            $service = Service::find($id);
            $message = "Service Edit Successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            //CMS page Validation...
            $rules = [
                'title' => 'required',
                'title_2' => 'required',
                'line1' => 'required',
                'line2' => 'required',
                'line3' => 'required',
                'line4' => 'required',
                
            ];
            $customMessages = [
                'title.required' => "Title is required",
                'title_2.required' => "2nd Title is required",
                'line1.required' => "Line 1 is required",
                'line2.required' => "Line 2 is required",
                'line3.required' => "Line 3 is required",
                'line4.required' => "Line 4 is required",
            ];

            $this->validate($request,$rules,$customMessages);
            
            $service->title = $data['title'];
            $service->title_2 = $data['title_2'];
            $service->line1 = $data['line1'];
            $service->line2 = $data['line2'];
            $service->line3 = $data['line3'];
            $service->line4 = $data['line4'];
            $service->status=1;
            $service->save();
            return redirect('admin/service')->with('success_message', $message );

        }
        return view('admin.pages.service.add_edit_service')->with(compact('title','service'));
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
        Service::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Service Delete Sucessfully.' );
    }
}

