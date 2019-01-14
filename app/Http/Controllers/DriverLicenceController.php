<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverLicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $driverlicences = \App\DriverLicence::with('county')->paginate();
    return view('driverlicences/index', ['driverlicences' => $driverlicences]);
        
    $driverlicences = \App\DriverLicence::with('county')->paginate();
    return view('driverlicences/index', ['driverlicences' => $driverlicences]);

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $counties = \App\County::all();
    $drivers = \App\Driver::all()
    return view('driverlicences/create', ['counties' => $counties, 'drivers' => $drivers]);



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
            'date_of_issue' => 'required',
            'expiration_date' => 'required',
            'county_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('DriverLicenceController@create')
                ->withErrors($validator);
        }
    
    
        $data = $request->input();
        \App\DriverLicence::create($data);
        return redirect()->action('DriverLicenceController@index');
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
        \App\DriverLicence::destroy($id);
        return redirect()->action('DriverLicenceController@index');
    }
}
