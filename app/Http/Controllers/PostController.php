<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("directory.create"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation= $request->validate( [
        'name' => 'required|max:100|string',
        'ename' => 'required|max:100|string',
        'cno' => 'required|min:10|max:12|numeric',
        'cemail' => 'required|max:50|email',
        'caddress' => 'required|max:150|string'
        /*'cuan' => 'required|max:12|min:12|alpha_num',
        'crn' => 'required|max:8|min:8|alpha_num',
        'cgin' => 'required|max:15|min:15|alpha_num'*/
         ]);

        // print_r($validation);

        if($validation->true){}
        $c_name = $request->input('name');
        $c_emp = $request->input('cemp');
        $c_no = $request->input('cno');
        $c_email = $request->input('cemail');
        $c_address = $request->input('caddress');
      /*  $c_uan = $request->input('cuan');
        $c_rn = $request->input('crn');
        $c_gin = $request->input('cgin');*/
        $data = array('Cname'=>$c_name,'Cemp'=>$c_emp,'Phoneno'=>$c_no,'Email'=>$c_email
        ,'Address'=>$c_address);
     
        DB::table('cdetails')->insert($data);
      echo "Record inserted successfully.<br/>";
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
