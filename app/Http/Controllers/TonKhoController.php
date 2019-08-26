<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TonKho;

class TonKhoController extends Controller
{
    public function layTonKho(){
    	$tonkho = TonKho::select('*')->get();
    	echo $tonkho;
    }

    public function lay1(){
    	$tonkho = TonKho::select('*')->where('id',1)->first();
    	echo $tonkho;
    }

    public function capNhatTonKho(Request $request){
    	$thang = $request->thang;
    	$trangthai = $request->trangthai;

    	$tonkho = TonKho::select('*')->where('id',1)->first();
    	$tonkho->thang = $thang;
    	$tonkho->trangthai = $trangthai;
    	$tonkho->save();

    	echo "Cap nhat thanh cong";
    }

    public function layCapNhatTonKho(){
    	return view('tonkho');
    }

    public function xoaTonKho(){
    	$tonkho = TonKho::select('*')->where('id',1)->first();
    	$tonkho->delete();
    	echo "Xoa thanh cong";
    }
}
