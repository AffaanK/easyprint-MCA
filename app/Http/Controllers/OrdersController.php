<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::orderby('date')->paginate(10);
        return view('orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
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
            'file' => 'required|max:1999',
            'date' => 'required',
            'description' => 'required',
            'print_type' => 'required',
            'sides' => 'required',
            'binding' => 'required',
            'layout' => 'required',
            'copies' => 'required',
        ]);

        $orders = new Orders;
        $dirName='';
        $fileName = '';
        //handle file upload
        if ($request->hasFile('file')) {
            $fileNameWithExt = $request->file->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName .'_'.time().'.'.$extension;
            $dirName=time();
            //Upload file
            $path = $request->file('file')->storeAs('public/orders/'.$dirName, $fileNameToStore);
        }

        $orders->date = $request->date;
        $orders->description = $request->description;
        $orders->print_type = $request->print_type;
        $orders->sides = $request->sides;
        $orders->binding = $request->binding;
        $orders->copies = $request->copies;
        $orders->layout = $request->layout;
        $orders->file_dir = $dirName;

        $orders->save();
        return back()
            ->with('success', 'File has been uploaded.')
            ->with('file', $fileName);
    }

    /**
     * 
     * Save the uploaded file 
     */
    public function fileUpload(Request $req)
    {
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
