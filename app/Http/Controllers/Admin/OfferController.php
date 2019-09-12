<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        return view('admin.offer.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offer.create');
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
            'location'=>'required',
            'percent'=>'required',
            'offer_name'=>'required',
            'details'=>'required',
        ]);

        $offer = new Offer();
        $offer ->location = $request->location;
        $offer ->percent = $request->percent;
        $offer ->offer_name = $request->offer_name;
        $offer ->details = $request->details;

        $offer ->save();
        return redirect()->route('offer.index')->with('successMsg','Slider Successfully Updated');
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
        $offer = Offer::find($id);
        return view('admin.offer.edit',compact('offer'));
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
            'location'=>'required',
            'percent'=>'required',
            'offer_name'=>'required',
            'details'=>'required',
        ]);
        $offer = Offer::find($id);
        $offer->location = $request->location;
        $offer->percent = $request->percent;
        $offer->offer_name = $request->offer_name;
        $offer->details = $request->details;
        $offer->save();
        return redirect()->route('offer.index')->with('successMsg','Slider Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);
        $offer->delete();
        return redirect()->back()->with('successMsg','Slider Successfully Deleted');
    }
}
