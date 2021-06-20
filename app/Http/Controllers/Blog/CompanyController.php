<?php

namespace App\Http\Controllers\Blog;
use App\Models\BlogModel\Company;
use App\Http\Controllers\Controller;
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
        $company = company::get();
        return view('backend.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);
             $company=new company();
         $company->name=$request->name;
         $company->address=$request->address;
         $company->phone=$request->phone;
         $company->email=$request->email;
         if($company->save()){
         return redirect()->action('Blog\CompanyController@index');
         } 
         else{
             return redirect()->back();
         }
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
        $company=Company::find($id);
        return view('backend.company.edit',compact('company'));
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
        $company=Company::find($id);
         $company->name=$request->name;
         $company->address=$request->address;
         $company->phone=$request->phone;
         $company->email=$request->email;
         if($company->save()){
         return redirect()->action('Blog\CompanyController@index');
         } 
         else{
             return redirect()->back();
         }
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
