<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::first();
        return view('backend.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company.create');
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
            'name'=>'required',
            'image'=>'required',
            'province'=>'required',
            'district'=>'required',
            'city'=>'required',
            'street'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'reg_no'=>'required',
            'pan_no'=>'required',
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->province = $request->province;
        $company->district = $request->district;
        $company->city = $request->city;
        $company->street = $request->street;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->reg_no = $request->reg_no;
        $company->pan_no = $request->pan_no;

        if($request->has('image')){
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file -> move('companyimage',$newName);
            $company->image = "companyimage/$newName";
        }
        $company->save();

        return redirect()->back()->with('status', 'Your Company has been created.');

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
