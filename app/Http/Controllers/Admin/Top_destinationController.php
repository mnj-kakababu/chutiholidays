<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Top_destination;

class Top_destinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top_destinations = Top_destination::all();
        return view('admin.top_destination.index',compact('top_destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.top_destination.create');
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
            'destination_name'=>'required',
            'destinations_description'=>'required',
            'price'=>'required',

            'image'=>'required|mimes:jpeg,png,jpg,bmp',
        ]);
        $image = $request->file('image');
        $slug = str_slug ($request->city);

        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/top_destination'))
            {
                mkdir('uploads/top_destination', 0777 , true);
            }
            $image->move('uploads/top_destination',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $top_destination = new top_destination();
        $top_destination ->destination_name = $request->destination_name;
        $top_destination ->destinations_description = $request->destinations_description;
        $top_destination ->price = $request->price;
        $top_destination ->image = $imagename;
        $top_destination ->save();
        return redirect()->route('top_destination.index')->with('successMsg','Top Package Successfully Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $top_destination = top_destination::find($id);
        return view('admin.top_destination.edit',compact('top_destination'));
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
            'destination_name' => 'required',
            'destinations_description' => 'required',
            'price' => 'required',

            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->city);
        $top_destination = Top_destination::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/top_destination'))
            {
                mkdir('uploads/top_destination', 0777 , true);
            }
            $image->move('uploads/top_destination',$imagename);
        }else {
            $imagename = $top_destination->image;
        }
        $top_destination ->destination_name = $request->destination_name;
        $top_destination ->destinations_description = $request->destinations_description;
        $top_destination ->price = $request->price;
        $top_destination ->image = $imagename;
        $top_destination->save();
        return redirect()->route('top_destination.index')->with('successMsg','Top Package Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $top_destination = top_destination::find($id);
        if (file_exists('uploads/top_destination/'.$top_destination->image))
        {
            unlink('uploads/top_destination/'.$top_destination->image);
        }
        $top_destination->delete();
        return redirect()->back()->with('successMsg','Top Package Successfully Deleted');
    }
}
