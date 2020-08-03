<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;

class NhanvienController extends Controller
{
    public function showNhanVien(){
        $listNhanvien =  NhanVien::all();
        return view('admin.nhanvien.show_nhanvien',['listNhanvien' => $listNhanvien]);
    }
    public function createNhanVien()
    {
        return view('admin.nhanvien.create_nhanvien');
    }
    public function postNhanVien(Request $request)
    {
      dd($request ->all());
    }
}
