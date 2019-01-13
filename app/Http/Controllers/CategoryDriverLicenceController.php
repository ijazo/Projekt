<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryDriverLicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $categorydriverlicence = \App\CategoryDriverLicence::with('category')->paginate();
    return view('categorydriverlicence/index', ['categorydriverlicence' => $categorydriverlicence]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorydriverlicence/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'city_name' => 'required|max:255',
            'country_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('CategoryDriverLicenceController@create')
                ->withErrors($validator);
        }
    
    
        $data = $request->input();
        \App\CategoryDriverLicence::create($data);
        return redirect()->action('CategoryDriverLicenceController@index');
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
        \App\CategoryDriverLicence::destroy($id);
        return redirect()->action('CategoryDriverLicenceController@index');
    }
}
