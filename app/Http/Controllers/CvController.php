<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use App\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcv = Cv::all();
        return view('cv.index',['cvs' =>$listcv]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cv =new Cv();

        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');


        $cv->save();

        return redirect('cvs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cv.show',['id'=>$id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cv = Cv::find($id);

        return view('cv.edit',['cv'=> $cv]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cv = Cv::find($id);
    
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');


        $cv->save();

        return redirect('cvs');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $cv= Cv::find($id);

        $cv->delete();

        return redirect('cvs');


    }
}
