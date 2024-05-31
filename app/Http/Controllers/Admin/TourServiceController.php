<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourService;
use Session;

class TourServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','tour_service');
        $Tour_services =TourService::get()->toArray();
        // dd($Slides);
        return view('admin.pages.tour_service.service')->with(compact('Tour_services'));

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
            $title="Add tour_service";
            $tourservice = new TourService;
            $message = "Service Added Successfully";
        }else{
            $title="Edit Service";
            $tourservice = TourService::find($id);
            $message = "Service Edit Successfully";
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
                'sub_title.required' => "Sub Title is required",
            ];

            $this->validate($request,$rules,$customMessages);
            
            $tourservice->title = $data['title'];
            $tourservice->sub_title = $data['sub_title'];
            $tourservice->status=1;
            $tourservice->save();
            return redirect('admin/tour_service')->with('success_message', $message );

        }
        return view('admin.pages.tour_service.add_edit_service')->with(compact('title','tourservice'));
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
        TourService::where('id',$id)->delete();
        return redirect()->back()->with('success_message','tour_service Delete Sucessfully.' );
    }
}

