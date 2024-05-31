<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Slide;
use App\Models\Service;
use App\Models\TourService;
use App\Models\Package;
use App\Models\Memory;
use App\Models\Contract;
use App\Models\Socal;
use App\Models\CmsPage;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::get()->toArray();
        // $slides = DB::table('slides')->where('status', 1 )->get()->toArray();
        $slides = Slide::get()->toArray();
        $services = Service::get()->toArray();
        $tourservices = TourService::get()->toArray();
        $packages = Package::get()->toArray();
        $memorys = Memory::get()->toArray();
        $contracts = Contract::get()->toArray();
        $socals = Socal::get()->toArray();
        $cmspages = CmsPage::get()->toArray();
                // dd($categorys,$slides,$services,$tourservices,$packages,$memorys,$Contracts,$Socals,$CmsPages);
        return view('welcome',compact('categorys', 'slides', 'services','tourservices','packages','memorys','contracts','socals','cmspages'));
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
    public function edit(string $id)
    {
        //
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
