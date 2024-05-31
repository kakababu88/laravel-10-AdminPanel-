<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','headline');
        $Categorys =Category::get()->toArray();
        // dd($Categorys);
        return view('admin.pages.category')->with(compact('Categorys'));
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
            $title="Add Category";
            $category = new Category;
            $message = "Category Added Successfully";
        }else{
            $title="Edit Category";
            $category = Category::find($id);
            $message = "Category Edit Successfully";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            //Category Validation...
            $rules = [
                'title' => 'required',
                'description' => 'required',
                
            ];
            $customMessages = [
                'title.required' => "Title is required",
                'description.required' => "Description is required",
            ];

            $this->validate($request,$rules,$customMessages);
            
            $category->title = $data['title'];
            $category->description = $data['description'];
            $category->save();
            return redirect('admin/headline')->with('success_message', $message );

        }
        return view('admin.pages.add_edit_category')->with(compact('title','category'));
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
        //delete Section
        Category::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Section Delete Sucessfully.');
    }
}
