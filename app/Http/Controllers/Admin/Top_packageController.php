<?php

namespace App\Http\Controllers\Admin;



use App\Top_package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Top_packageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top_packages = Top_package::all();
        return view('admin.top_package.index',compact('top_packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.top_package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'city'=>'required',
            'country'=>'required',
            'price'=>'required',

            'image'=>'required|mimes:jpeg,png,jpg,bmp',
        ]);
        $image = $request->file('image');
        $slug = str_slug ($request->city);

        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/top_package'))
            {
                mkdir('uploads/top_package', 0777 , true);
            }
            $image->move('uploads/top_package',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $top_package = new Top_package();
        $top_package ->city = $request->city;
        $top_package ->country = $request->country;
        $top_package ->price = $request->price;
        $top_package ->details = $request->details;
        $top_package ->image = $imagename;
        $top_package ->save();
        return redirect()->route('top_package.index')->with('successMsg','Top Package Successfully Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $top_package = top_package::find($id);
        return view('admin.top_package.edit',compact('top_package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'city' => 'required',
            'country' => 'required',
            'price' => 'required',

            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->city);
        $top_package = Top_package::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/top_package'))
            {
                mkdir('uploads/top_package', 0777 , true);
            }
            $image->move('uploads/top_package',$imagename);
        }else {
            $imagename = $top_package->image;
        }
        $top_package->city = $request->city;
        $top_package->country = $request->country;
        $top_package->price = $request->price;
        $top_package->details = $request->details;
        $top_package->image = $imagename;
        $top_package->save();
        return redirect()->route('top_package.index')->with('successMsg','Top Package Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $top_package = Top_package::find($id);
        if (file_exists('uploads/top_package/'.$top_package->image))
        {
            unlink('uploads/top_package/'.$top_package->image);
        }
        $top_package->delete();
        return redirect()->back()->with('successMsg','Top Package Successfully Deleted');
    }
}
