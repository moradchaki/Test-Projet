<?php

namespace App\Http\Controllers;

use App\Productt;
use Illuminate\Http\Request;

class ProducttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['productts'] = Productt::orderBy('id','desc')->paginate(10);
   
        return view('productt.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'product_code' => 'required',
            'description' => 'required',
        ]);
   
        Productt::create($request->all());
    
        return Redirect('productts')->with('success','Greate! Productt created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function show(Productt $productt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function edit(Productt $productt)
    {
        $where = array('id' => $id);
        $data['productt_info'] = Productt::where($where)->first();
 
        return view('productt.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productt $productt)
    {
        $request->validate([
            'title' => 'required',
            'product_code' => 'required',
            'description' => 'required',
        ]);
         
        $update = ['title' => $request->title, 'description' => $request->description];
        Productt::where('id',$id)->update($update);
   
        return Redirect('productts')->with('success','Great! Productt updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productt  $productt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productt $productt)
    {
        Productt::where('id',$id)->delete();
   
        return Redirect::to('productts')->with('success','Productt deleted successfully');
    }
}
