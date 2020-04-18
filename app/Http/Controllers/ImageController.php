<?php

namespace App\Http\Controllers;

use App\models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Image::all();
        return view('backend.images.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.images.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $image = time().'.'.$request->img->extension();

            $request->img->move(public_path('images'), $image);


        Image::create([
            'title'=>$request['title'],
            'desc'=>$request['desc'],
            'img'=>$image,


        ]);

        return redirect()->route('image.index')->with('success','successfully done');

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
        $data=Image::find($id);
        return view('backend.images.update',compact('data'));
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
        $data=Image::find($id);



        if ($request->has('img')) {
            $image = time().'.'.$request->img->extension();

            $request->img->move(public_path('images'), $image);

            $data->img=$image;

            }

            $data->title=$request->title;
            $data->desc=$request->desc;

            $data->save();

        return redirect()->route('image.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Image::find($id);
        $image = $data->img;


        $filepath= public_path('images/');
        $imagepath = $filepath.$image;

        //dd($old_image);
        if (file_exists($imagepath)) {
            @unlink($imagepath);
        }


        $data->delete();

        return redirect()->route('image.index');
    }
}
