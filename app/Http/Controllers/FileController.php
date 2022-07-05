<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:file-list|file-create|file-edit|file-delete', ['only' => ['index','show']]);
         $this->middleware('permission:file-create', ['only' => ['create','store']]);
         $this->middleware('permission:file-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:file-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $files = File::latest()->paginate(5);
        return view('files.index',compact('files'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'number' => 'required',
            'filename' => 'required',
            'status' => 'required',
        ]);
    
        File::create($request->all());
    
        return redirect()->route('files.index')
                        ->with('success','Files created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('files.show',compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('files.show',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        request()->validate([
            'number' => 'required',
            'filename' => 'required',
            'status' => 'required',
        ]);
    
        $file->update($request->all());
    
        return redirect()->route('files.index')
                        ->with('success','File updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();
    
        return redirect()->route('files.index')
                        ->with('success','File deleted successfully');
    }
}
