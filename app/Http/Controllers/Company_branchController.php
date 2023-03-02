<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Company_branch;
use Illuminate\Http\Request;

class Company_branchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_branches= Company_branch::with('company')->orderBy('id', 'desc')->get();
        return response()->view('cms.Company_branch.index' , compact('company_branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies= Company::all();
        return response()->view('cms.Company_branch.create' , compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'Name' => 'required|string|min:3|max:20',

          ]);

          if ( ! $validator->fails()) {
              $company_branches = new Company_branch();
              $company_branches->Name = $request->get('Name');
              $company_branches->Email = $request->get('Email');
              $company_branches->Password = $request->get('Password');
              $company_branches->Status = $request->get('Status');
              $company_branches->Description = $request->get('Description');
              $company_branches->company_id = $request->get('company_id');

              $isSaved = $company_branches->save();
              if ($isSaved) {
              return response()->json(['icon'=>'success' , 'title'=>'Storage completed successfully'],200);
              }else{
              return response()->json(['icon'=>'error' , 'title'=>'Storage failed'],400);

              }

          }else{
              return response()->json(['icon'=>'error' , 'title'=>$validator->getMessageBag()->first()],400);
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
        $company_branches=Company_branch::findOrFail($id);
        return response()->view('cms.Company_branch.show' , compact('company_branches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company_branches=Company_branch::findOrFail($id);
        return response()->view('cms.Company_branch.edit', compact('company_branches'));
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
        $validator = Validator($request->all(),[
            'Name' => 'required|string|min:3|max:20',

          ]);

          if ( ! $validator->fails()) {
            $company_branches = Company_branch::findOrFail($id);
              $company_branches->Name = $request->get('Name');
              $company_branches->Email = $request->get('Email');
              $company_branches->Password = $request->get('Password');
              $company_branches->Status = $request->get('Status');
             $company_branches->Description = $request->get('Description');

              $isUpdated = $company_branches->save();

              return ['redirect' => route('company_branches.index')];

              if ($isUpdated) {
              return response()->json(['icon'=>'success' , 'title'=>'Updated complete success'],400);

              }else{
              return response()->json(['icon'=>'error' , 'title'=>'Updated failed'],400);

              }

          }else{
              return response()->json(['icon'=>'error' , 'title'=>$validator->getMessageBag()->first()],400);
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
        $company_branches=Company_branch::destroy($id);
        return response()->json(['icon'=> 'success' , 'title'=> 'The deletion was completed successfully'],200);
    }

    public function restore($id){
        $restore = Company_branch::onlyTrashed()->findOrFail($id)->restore();

   }

}