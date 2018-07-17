<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
    	$data = Kendaraan::all();
    	return view('kendaraan.daftar_kendaraan')->with('data', $data);
    }

    public function create(){
    	return view('kendaraan.masukantipe');
    }


	public function store(Request $request){
	Kendaraan::create($request->all());
	return redirect('kendaraan');
	}

	public function show($id)
	{
	
	$data = Kendaraan::find ($id);
	return view ('kendaraan.detailkendaraan')->with('data', $data);

   }

   public function edit($id){
   	$data = Kendaraan::find ($id);
	return view ('kendaraan.editkendaraan')->with('data', $data);

   }
   public function update(Request $request,$id){
   	Kendaraan::find($id)->update($request->all());
   	return redirect('kendaraan');
   }

   public function destroy($id){

   	Kendaraan::find($id)->delete();
   	return redirect('kendaraan');
   }

}