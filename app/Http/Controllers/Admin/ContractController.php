<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;
use Session;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','contract');
        $Contracts =Contract::get()->toArray();
        // dd($Slides);
        return view('admin.pages.contract.contract')->with(compact('Contracts'));

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
            $title="Add contract";
            $contract = new Contract;
            $message = "Contract Added Successfully";
        }else{
            $title="Edit Contract";
            $contract = Contract::find($id);
            $message = "Contract Edit Successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            //CMS page Validation...
            $rules = [
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required',
                
            ];
            $customMessages = [
                'address.required' => "Title is required",
                'phone.required' => "Phone is required",
                'phone.numeric' => "Valid Numer required",
                'email.required' => "email is required",
                'email.email' => "Valid is required",
            ];

            $this->validate($request,$rules,$customMessages);
            
            $contract->address = $data['address'];
            $contract->phone = $data['phone'];
            $contract->email = $data['email'];
            $contract->save();
            return redirect('admin/contract')->with('success_message', $message );

        }
        return view('admin.pages.contract.add_edit_contract')->with(compact('title','contract'));
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
        Contract::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Contract Delete Sucessfully.' );
    }
}
