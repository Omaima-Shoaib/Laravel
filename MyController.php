<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        return view('users.index',['users' =>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
      
    // dd( $request -> all());
  
array_push($users,['id'=>$request['id'],'name'=>$request['name'],'email'=>$request['email'],'email_verified_at'=>"2022-08-06 21:47:32"]);
return view('users.index',['users'=>$users]);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {$users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        true);
        return view("users.show",['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.edit',['id'=>$id]);
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
      return  view('users.delete',['id'=>$id]);
    }
}
