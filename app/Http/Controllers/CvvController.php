<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cvvs'] = User::orderBy('id','desc')->paginate(8);
   
        return view('cvs',$data);
    }
    
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $user = User::updateOrCreate(
            ['id' => $request->user_id],
            ['name' => $request->name, 'email' => $request->email]
        );
        return Response::json($user);
    }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $where = array('id' => $id);
        $user  = User::where($where)->first();
 
        return Response::json($user);
    }
 
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();
   
        return Response::json($user);
    }
}
