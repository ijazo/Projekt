<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $drivers = \App\Driver::with('city')->paginate();
    return view('drivers/index', ['drivers' => $drivers]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $cities = \App\City::all();
    return view('drivers/create', ['cities' => $cities]);
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
            'OIB' => 'required|max:11',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'sex' => 'required',
            'sex' => 'required',
            'date_of_birth' => 'required',
            'city_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('DriverController@create')
                ->withErrors($validator);
        }
    
    
        $data = $request->input();
        \App\Driver::create($data);
        return redirect()->action('DriverController@index');
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
        \App\Driver::destroy($id);
        return redirect()->action('DriverController@index');
    }
}
