<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Socal;
use Session;

class SocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','socal');
        $Socals =Socal::get()->toArray();
        // dd($Slides);
        return view('admin.pages.socal.socal')->with(compact('Socals'));

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
            $title="Add socal";
            $socal = new Socal;
            $message = "Socal Added Successfully";
        }else{
            $title="Edit Socal";
            $socal = Socal::find($id);
            $message = "Socal Edit Successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            //CMS page Validation...
            $rules = [
                'faceook' => 'required',
                'twitter' => 'required',
                'linkedin' => 'required',
                'instagram' => 'required',
                
                
            ];
            $customMessages = [
                'faceook.required' => "faceook Link is required",
                'twitter.required' => "twitter Link is required",
                'linkedin.required' => "linkedin Link is required",
                'instagram.required' => "instagram Link is required",
            ];

            $this->validate($request,$rules,$customMessages);
            
            $socal->faceook = $data['faceook'];
            $socal->twitter = $data['twitter'];
            $socal->linkedin = $data['linkedin'];
            $socal->instagram = $data['instagram'];
            $socal->save();
            return redirect('admin/socal')->with('success_message', $message );

        }
        return view('admin.pages.socal.add_edit_socal')->with(compact('title','socal'));
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
        Socal::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Socal Delete Sucessfully.' );
    }
}
